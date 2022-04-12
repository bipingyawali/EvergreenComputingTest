<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Laracasts\Flash\Flash;
use Yajra\DataTables\Facades\DataTables;

class CustomerController extends Controller
{
    protected $customerModel;
    public function __construct(Customer $customerModel){
        $this->customerModel = $customerModel;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customers.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function fetchDataAjax(){
        if(\request()->ajax()){
            $users = $this->customerModel->where('added_by', auth()->user()->id)->select('id','company_name','first_name','last_name','phone_number');
            $datatable = DataTables::of($users)
                ->addColumn('action', function ($data) {
                    return '<div class="action-btn">
                            <a href="'.route('customers.show',$data->id).'"  class="btn btn-primary btn-sm mr-1 text-white"><i class="fa fa-eye"></i></a>
                            <a href="'.route('customers.edit',$data->id).'"  class="btn btn-info btn-sm mr-1 text-white"><i class="fa fa-edit"></i></a>
                            </div>';
                })
                ->addIndexColumn()
                ->rawColumns(['action'])
            ;
            return $datatable->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CustomerRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request)
    {
        DB::beginTransaction();
        try {
            $this->customerModel->create($request->all());
            DB::commit();
            $message = 'Customer added successfully.';
            Flash::success($message);
            return redirect()->route('customers.index');
        } catch (\Exception $exception){
            DB::rollBack();
            $message = 'Failed to add customer.';
            if (env('APP_DEBUG'))
                $message = $exception->getMessage() . 'Line #' . $exception->getLine();
            Flash::error($message);
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['customer'] = $this->customerModel->findOrFail($id);
        return view('customers.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['customer'] = $this->customerModel->findOrFail($id);
        return view('customers.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerRequest $request, $id)
    {
        DB::beginTransaction();
        try {
            $this->customerModel->findOrFail($id)->update($request->all());
            DB::commit();
            $message = 'Customer added successfully.';
            Flash::success($message);
            return redirect()->route('customers.index');
        } catch (\Exception $exception){
            DB::rollBack();
            $message = 'Failed to add customer.';
            if (env('APP_DEBUG'))
                $message = $exception->getMessage() . 'Line #' . $exception->getLine();
            Flash::error($message);
            return redirect()->back();
        }
    }

}
