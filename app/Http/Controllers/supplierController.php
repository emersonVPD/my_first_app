<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\supplier\major_customer_presents;
use App\Models\supplier\principal_banks;
use App\Models\supplier\major_3_products;
use App\Models\supplier\business_registries;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class supplierController extends Controller
{
    //Display a listing of the resource. 
    public function index()
    {
        $supplier = Supplier::whereNull('deleted_at')->get();
        return view('supplier.index')->with('supplier',$supplier);
    }

    //Store a newly created resource in storage.
    public function store(Request $request)
    {
        $supplier = Supplier::create([
            'datesub' => $request->datesub,
            'company_name' => $request->company_name,
            'company_addr' => $request->company_addr,
            'company_phone' => $request->company_phone,
            'plant_ware' => $request->plant_ware,
            'fax_no' => $request->fax_no,
            'email' => $request->email,
            'tob' => $request->tob,
            'auth_capital' => $request->auth_capital,
            'yrs_business' => $request->yrs_business,
            'nature_business' => $request->nature_business,
            'prod_lines' => $request->prod_lines,
            'src_materials' => $request->src_materials,
            'principal_addrs' => $request->principal_addrs,
            'terms_payment' => $request->terms_payment,
            'others' => $request->others,
            'credit_amount' => $request->credit_amount,
            'no_of_vehicle' => $request->no_of_vehicle,
        ]);
        major_customer_presents::create([
            'supplier_id' => $supplier->id,
            'mcp_name_1' => $request->mcp_name_1, 'mcp_name_2' => $request->mcp_name_2, 'mcp_name_3' => $request->mcp_name_3,
            'mcp_addrs_1' => $request->mcp_addrs_1,'mcp_addrs_2' => $request->mcp_addrs_2,'mcp_addrs_3' => $request->mcp_addrs_3,
            'mcp_contact_1' => $request->mcp_contact_1,'mcp_contact_2' => $request->mcp_contact_2,'mcp_contact_3' => $request->mcp_contact_3,
            'mcp_cont_person_1' => $request->mcp_cont_person_1,'mcp_cont_person_2' => $request->mcp_cont_person_2,'mcp_cont_person_3' => $request->mcp_cont_person_3,

        ]);

        principal_banks::create([
            'supplier_id' => $supplier->id,
            'pb_banks_1' => $request->pb_banks_1, 'pb_banks_2' => $request->pb_banks_2, 'pb_banks_3' => $request->pb_banks_3,
            'pb_cont_officer_1' => $request->pb_cont_officer_1,'pb_cont_officer_2' => $request->pb_cont_officer_2,'pb_cont_officer_3' => $request->pb_cont_officer_3,
            'pb_tel_no_1' => $request->pb_tel_no_1,'pb_tel_no_2' => $request->pb_tel_no_2,'pb_tel_no_3' => $request->pb_tel_no_3,
          
        ]);

        major_3_products::create([
            'supplier_id' => $supplier->id,
            'm3p_company_1' => $request->m3p_company_1, 'm3p_company_2' => $request->m3p_company_2, 'm3p_company_3' => $request->m3p_company_3,
            'm3p_prod_type_1' => $request->m3p_prod_type_1,'m3p_prod_type_2' => $request->m3p_prod_type_2,'m3p_prod_type_3' => $request->m3p_prod_type_3,
            'm3p_brand_name_1' => $request->m3p_brand_name_1,'m3p_brand_name_2' => $request->m3p_brand_name_2,'m3p_brand_name_3' => $request->m3p_brand_name_3,
        ]);

    // Define the validation rules for each file input
    $rules = [
        'permit_file_1' => 'nullable|mimes:jpeg,png,pdf|max:5120', // 5MB maximum size
        'permit_file_2' => 'nullable|mimes:jpeg,png,pdf|max:5120',
        'permit_file_3' => 'nullable|mimes:jpeg,png,pdf|max:5120',
        'permit_file_4' => 'nullable|mimes:jpeg,png,pdf|max:5120',
    ];

    // Create a custom error message for file size validation
    $messages = ['max' => 'The :attribute must not exceed 5MB.',];

    // Validate the request data
    $validator = Validator::make($request->all(), $rules, $messages);

    if ($validator->fails()) { return redirect()->back()->withErrors($validator)->withInput(); }

    // If validation passes, proceed to handle file uploads
    $now = now()->format('mdyH');
    $folderPath = 'supplier_files/permit'; // Company and branch path for employee files

    if (!file_exists($folderPath)) {
        mkdir($folderPath, 0755, true);
    }

    $filePaths = [];

    for ($i = 1; $i <= 4; $i++) {
        $inputName = "permit_file_" . $i;
        $permitFile = $request->file($inputName);

        if ($permitFile) {
            $origName = $permitFile->getClientOriginalName();
            $fileName = $now . '_' . $i . '_' . $origName;
            $filePath = $permitFile->move($folderPath, $fileName);
            $saveUrl = $folderPath . '/' . $fileName;

            $filePaths[$inputName] = $saveUrl;
        }
    }

    // Example using Eloquent
    business_registries::create([
        'supplier_id' => $supplier->id,
        'br_permit_no_1' => $request->br_permit_no_1,'br_permit_no_2' => $request->br_permit_no_2,
        'br_permit_no_3' => $request->br_permit_no_3,'br_permit_no_4' => $request->br_permit_no_4,
        'br_date_issued_1' => $request->br_date_issued_1,'br_date_issued_2' => $request->br_date_issued_2,
        'br_date_issued_3' => $request->br_date_issued_3,'br_date_issued_4' => $request->br_date_issued_4,
        'br_expi_date_1' => $request->br_expi_date_1,'br_expi_date_2' => $request->br_expi_date_2,
        'br_expi_date_3' => $request->br_expi_date_3,'br_expi_date_4' => $request->br_expi_date_4,
        'permit_file_1' => $filePaths['permit_file_1'] ?? null,'permit_file_2' => $filePaths['permit_file_2'] ?? null,
        'permit_file_3' => $filePaths['permit_file_3'] ?? null,'permit_file_4' => $filePaths['permit_file_4'] ?? null,
    ]);

    return redirect()->route('supplier.index')->with('message', 'Success Insert');
}

        


    public function create()
    {
        return view('supplier.create');
    }

        //Update the specified resource in storage.
        public function update(Request $request)
        {
            $this->validate($request,[
                'datesub','company_name','company_addr',
                'company_phone','plant_ware','fax_no',
                'email','tob','auth_capital',
                'yrs_business','nature_business','prod_lines',
                'src_materials','principal_addrs','terms_payment',
                'others','credit_amount','no_of_vehicle',

                'mcp_name_1' => 'required',
            ]);

            $id = $request->id;
                $supplier = Supplier::find($id);
                $supplier -> datesub = $request->datesub;
                $supplier -> company_name = $request->company_name;
                $supplier -> company_addr = $request->company_addr;
                $supplier -> company_phone = $request->company_phone;
                $supplier -> plant_ware = $request->plant_ware;
                $supplier -> fax_no = $request->fax_no;
                $supplier -> email = $request->email;
                $supplier -> tob = $request->tob;
                $supplier -> auth_capital = $request->auth_capital;
                $supplier -> yrs_business = $request->yrs_business;
                $supplier -> nature_business = $request->nature_business;
                $supplier -> prod_lines = $request->prod_lines;
                $supplier -> src_materials = $request->src_materials;
                $supplier -> principal_addrs = $request->principal_addrs;
                $supplier -> terms_payment = $request->terms_payment;
                $supplier -> others = $request->others;
                $supplier -> credit_amount = $request->credit_amount;
                $supplier -> no_of_vehicle = $request->no_of_vehicle;
                $supplier->update();

                $majorCustomerPresents = major_customer_presents::where('supplier_id', $id)->first();
                if ($majorCustomerPresents) {
                    $majorCustomerPresents->update([
                        'mcp_name_1' => $request->mcp_name_1,'mcp_name_2' => $request->mcp_name_2,'mcp_name_3' => $request->mcp_name_3,
                        'mcp_addrs_1' => $request->mcp_addrs_1,'mcp_addrs_2' => $request->mcp_addrs_2,'mcp_addrs_3' => $request->mcp_addrs_3,
                        'mcp_contact_1' => $request->mcp_contact_1,'mcp_contact_2' => $request->mcp_contact_2,'mcp_contact_3' => $request->mcp_contact_3,
                        'mcp_cont_person_1' => $request->mcp_cont_person_1,'mcp_cont_person_2' => $request->mcp_cont_person_2,'mcp_cont_person_3' => $request->mcp_cont_person_3,
                    ]);
                }
                
                $principal_banks = principal_banks::where('supplier_id', $id)->first();
                if ($principal_banks) {
                    $principal_banks->update([
                        'pb_banks_1' => $request->mcp_name_1,'pb_banks_2' => $request->pb_banks_2,'pb_banks_3' => $request->pb_banks_3,
                        'pb_cont_officer_1' => $request->pb_cont_officer_1,'pb_cont_officer_2' => $request->pb_cont_officer_2,'pb_cont_officer_3' => $request->pb_cont_officer_3,
                        'pb_tel_no_1' => $request->pb_tel_no_1,'pb_cont_officer_2' => $request->pb_cont_officer_2,'pb_cont_officer_3' => $request->pb_cont_officer_3,
                    ]);
                }

                $major3products = major_3_products::where('supplier_id', $id)->first();
                if ($major3products) {
                    $major3products->update([
                        'm3p_company_1' => $request->m3p_company_1,'m3p_company_2' => $request->m3p_company_2,'m3p_company_3' => $request->m3p_company_3,
                        'm3p_prod_type_1' => $request->m3p_prod_type_1,'m3p_prod_type_2' => $request->m3p_prod_type_2,'m3p_prod_type_3' => $request->m3p_prod_type_3,
                        'm3p_brand_name_1' => $request->m3p_brand_name_1,'m3p_brand_name_2' => $request->m3p_brand_name_2,'m3p_brand_name_3' => $request->m3p_brand_name_3,
                    ]);
                }

                $businessRegistries = business_registries::where('supplier_id', $id)->first();
                if ($businessRegistries) {
                    $businessRegistries->update([
                        'br_permit_no_1' => $request->br_permit_no_1,'br_permit_no_2' => $request->br_permit_no_2,
                        'br_permit_no_3' => $request->br_permit_no_3,'br_permit_no_4' => $request->br_permit_no_4,
                        'br_date_issued_1' => $request->br_date_issued_1,'br_date_issued_2' => $request->br_date_issued_2,
                        'br_date_issued_3' => $request->br_date_issued_3,'br_date_issued_3' => $request->br_date_issued_4,
                        'br_expi_date_1' => $request->br_expi_date_1,'br_expi_date_2' => $request->br_expi_date_2,
                        'br_expi_date_3' => $request->br_expi_date_3,'br_expi_date_3' => $request->br_expi_date_4,
                    ]);
                }
                return redirect()->route('supplier.index')->with('message', 'Success Updated');
        }


    // Display the specified resource.
    public function show($id)
    {
        // $supplier = Supplier::with('major','principal','business','m3p')->findOrFail($id);
        // return view('supplier.show',[
        //     'supplier' => $supplier,

        $supplier = Supplier::with('major', 'principal', 'business', 'm3p')->findOrFail($id);
        $directory = 'supplier_files/permits';
        $files = Storage::disk('public')->files($directory);

        return view('supplier.show', [
            'supplier' => $supplier,
            'files' => $files,
        ]);
    }

    public function edit($id)
    {  
       $supplier = Supplier::find($id);
           return view('supplier.edit',[
               'supplier' => $supplier,      
    ]);
    }

    // public function update(Request $request, string $id)
    // {
        
    // }
    

    public function destroy($id)
    {
        
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();
       
        return back()->with('message', 'Success Deleted');
    }
}
