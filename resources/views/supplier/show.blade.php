@extends('Layout.app')
@section('title')
    Supplier Form
@endsection
@section('content')

    <div class="container mt-5 border">
        <img src="../images/BullaCraveLogo.jpg" height="250px" width="100%" class="mt-3">
            <div class="text-center">
                <h5 class="fw-bold mb-0"><i>Washing with a Better Technology</i></h5>
                    <h5 class="text-danger fw-bold">Authorized Dealer of LG Commercial Laundry</h5>
                        <h4 class="mb-0 fw-bold">BULLA CRAVE LAUNDRY MACHINE TRADING</h4>
                            <h6 class="mb-2" style="font-size: 12px">Procurement Office 93 ECG Building General Avenue Tandang Sora Quezon City</h6>
                                <h6 style="font-size: 12px">Tel No. (02) 8721 8960</h6>
            </div>
        <h4 class="bg-dark text-white text-center pt-3 pb-3 fw-bold">SUPPLIER ACCREDITATION FORM</h4>
        <h5 class="text-center text-danger">CONFIDENTIAL</h5>


        
        <form method="post" action="{{ route('supplier.store') }}" class="row g-0 mt-5 ms-5 me-5">
            @csrf
            <div class="mb-3 row justify-content-end">
                <label class="col-md-2 col-form-label text-md-end">Date Submitted:</label>
                  <div class="col-md-3">
                    <input type="date" class="form-control" name="datesub" value="{{ $supplier->datesub }}" readonly>
                  </div>
            </div>

            <!-- BASIC INFORMATION FORMS -->
            <div class="mb-3 row">
                <label for="" class="col-md-2 form-label fw-bold">Company Name : </label>
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="company_name" value="{{ $supplier->company_name }}" disabled>
                        </div>
            </div>

            <div class="mb-1 row">
                <label for="" class="col-md-2 form-label fw-bold">Company Address : </label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" name="company_addr" value="{{ $supplier->company_addr }}" disabled>
                    </div>

                <label for="" class="col-md-1 form-label fw-bold">Phone No.  </label>
                    <div class="col-md-4">
                        <input type="number" class="form-control" name="company_phone"  value="{{ $supplier->company_phone }}" disabled>
                    </div>
            </div>

            <div class="mb-3 row">
                <label for="" class="col-md-2 form-label fw-bold">Plant / Warehouse : </label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" name="plant_ware" value="{{ $supplier->plant_ware }}" disabled>
                    </div>

                <label  class="col-md-1 form-label fw-bold">Fax No.</label>
                    <div class="col-md-4">
                        <input type="number" class="form-control" name="fax_no" value="{{ $supplier->fax_no }}" disabled>
                    </div>
            </div>

            <div class="mb-3 row">
                <label for="" class="col-md-2 form-label fw-bold">Email Address : </label>
                    <div class="col-md-10">
                        <input type="email" class="form-control" name="email" value="{{ $supplier->email }}" disabled>
                    </div>
            </div>

            <div class="mb-3 row">
                <label for="Gender" class="col-md-2 form-label fw-bold">Types of Business :</label>
                <div class="col-md-8">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tob" value="Single Proprietorship" {{ $supplier->tob === 'Single Proprietorship' ? 'checked' : '' }} disabled>
                        <label class="form-check-label">Single Proprietorship</label>
                    </div>
            
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tob" value="Partnership" {{ $supplier->tob === 'Partnership' ? 'checked' : '' }} disabled>
                        <label class="form-check-label">Partnership</label>
                    </div>
            
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tob" value="Corporation" {{ $supplier->tob === 'Corporation' ? 'checked' : '' }} disabled>
                        <label class="form-check-label">Corporation</label>
                    </div>
                </div>
            </div>
            

            <div class="mb-1 row">
                    <label for="" class="col-md-2 form-label fw-bold">Authorized Capitalization : </label>
                <div class="col-md-5">
                    <input type="text" class="form-control" name="auth_capital" value="{{ $supplier->auth_capital }}" disabled>
                </div>

                <label for="" class="col-md-1 form-label fw-bold">No. of Years in Business</label>
                <div class="col-md-4">
                    <input type="number" class="form-control" name="yrs_business" value="{{ $supplier->yrs_business }}" disabled>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="" class="col-md-2 form-label fw-bold">Nature of Business : </label>
              <div class="col-md-4">
                <input type="text" class="form-control" name="nature_business" value="{{ $supplier->nature_business }}" disabled>
              </div>
            </div>

            <div class="mb-3 row">
                <label for="" class="col-md-2 form-label fw-bold">Product Lines : </label>
              <div class="col-md-4">
                <input type="text" class="form-control" name="prod_lines" value="{{ $supplier->prod_lines }}" disabled>
              </div>
            </div>

            <div class="mb-3 row">
                <label for="" class="col-md-2 form-label fw-bold">Source of Materials : </label>
              <div class="col-md-4">
                <input type="text" class="form-control" name="src_materials" value="{{ $supplier->src_materials }}" disabled>
              </div>
            </div>

            <div class="mb-3 row">
                <label for="" class="col-md-2 form-label fw-bold">Principal Address : </label>
              <div class="col-md-4">
                <input type="text" class="form-control" name="principal_addrs" value="{{ $supplier->principal_addrs }}" disabled>
              </div>
            </div>

            <!-- END OF BASIC INFORMATION FORMS -->

            {{-- <div class="mb-3 row">
                <label for="" class="col-md-12 form-label fw-bold">Corporate Officers ( State Fullname, Title, Description) ( Authorized Signatures ) : </label>
            <div class="row ms-5">
              <div class="col-md-4 mb-2">
                <input type="text" class="form-control" name="" placeholder="">
                </div>
              <div class="col-md-4 mb-2">
                <input type="text" class="form-control" placeholder="">
              </div>
            </div>

            <div class="row ms-5">
                <div class="col-md-4 mb-2">
                  <input type="text" class="form-control" placeholder="">
                </div>
                <div class="col-md-4 mb-2">
                  
                  <input type="text" class="form-control" placeholder="">
                </div>
            </div>

            <div class="row ms-5">
                <div class="col-md-4 mb-2">
                  <input type="text" class="form-control" placeholder="">
                </div>
                <div class="col-md-4 mb-2">
                  <input type="text" class="form-control" placeholder="">
                </div>
              </div>
            </div> --}}

            <div class="mb-3 row">
              <label for="" class="col-md-12 form-label fw-bold">Major Customers at Present : </label>
            <div class="table-responsive col-md-12">
              <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col" class="bg-info text-dark">Name</th>
                        <th scope="col" class="bg-info text-dark">Address</th>
                        <th scope="col" class="bg-info text-dark">Contact Number</th>
                        <th scope="col" class="bg-info text-dark">Contact Person</th>
                      </tr>
                    </thead>

                    <tbody>
                      

                      <tr>
                        <td><input type="text" class="form-control border-0" name="mcp_name_1"  value="{{ $supplier->major->mcp_name_1 }}"  readonly></td>
                        <td><input type="text" class="form-control border-0" name="mcp_addrs_1"  value="{{ $supplier->major->mcp_addrs_1 }}"  readonly></td>
                        <td><input type="text" class="form-control border-0" name="mcp_contact_1" value="{{ $supplier->major->mcp_contact_1 }}"  readonly></td>
                        <td><input type="text" class="form-control border-0" name="mcp_cont_person_1" value="{{ $supplier->major->mcp_cont_person_1 }}"  readonly></td>
                      </tr>
                      <tr>
                        <td><input type="text" class="form-control border-0" name="mcp_name_2" value="{{ $supplier->major->mcp_name_2 }}" readonly></td>
                        <td><input type="text" class="form-control border-0" name="mcp_addrs_2" value="{{ $supplier->major->mcp_addrs_2 }}"  readonly></td>
                        <td><input type="text" class="form-control border-0" name="mcp_contact_2" value="{{ $supplier->major->mcp_contact_2 }}"  readonly></td>
                        <td><input type="text" class="form-control border-0" name="mcp_cont_person_2" value="{{ $supplier->major->mcp_cont_person_2 }}" readonly></td>
                      </tr>
                      <tr>
                          <td><input type="text" class="form-control border-0" name="mcp_name_3" value="{{ $supplier->major->mcp_name_3 }}" readonly></td>
                          <td><input type="text" class="form-control border-0" name="mcp_addrs_3" value="{{ $supplier->major->mcp_addrs_3 }}"  readonly></td>
                          <td><input type="text" class="form-control border-0" name="mcp_contact_3" value="{{ $supplier->major->mcp_contact_3 }}"  readonly></td>
                          <td><input type="text" class="form-control border-0" name="mcp_cont_person_3"  value="{{ $supplier->major->mcp_cont_person_3 }}" readonly></td>
                      </tr>
                    </tbody>
                </table>
            </div>
          </div>

            <div class="mb-3 row">
                <label for="" class="col-md-12 form-label fw-bold">Principal Banks</label>
              <div class="col-md-12">
                <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col" class="bg-info text-dark">Banks</th>
                          <th scope="col" class="bg-info text-dark">Contact Officer</th>
                          <th scope="col" class="bg-info text-dark">Telephone No. </th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td><input type="text" class="form-control border-0" name="pb_banks_1" id="pb_banks_1" value="{{ $supplier->principal->pb_banks_1 }}"></td>
                          <td><input type="text" class="form-control border-0" name="pb_cont_officer_1" id="pb_cont_officer_1" value="{{ $supplier->principal->pb_cont_officer_1 }}"></td>
                          <td><input type="text" class="form-control border-0" name="pb_tel_no_1" id="pb_tel_no" value="{{ $supplier->principal->pb_tel_no_1 }}"></td>
                        </tr>
                        <tr>
                          <td><input type="text" class="form-control border-0" name="pb_banks_2" id="pb_banks_2" value="{{ $supplier->principal->pb_banks_2 }}"></td>
                          <td><input type="text" class="form-control border-0" name="pb_cont_officer_2" id="pb_cont_officer_2" value="{{ $supplier->principal->pb_cont_officer_2 }}"></td>
                          <td><input type="text" class="form-control border-0" name="pb_tel_no_2" id="pb_tel_no" value="{{ $supplier->principal->pb_tel_no_2 }}"></td>
                        </tr>
                        <tr>
                          <td><input type="text" class="form-control border-0" name="pb_banks_3" id="pb_banks_3" value="{{ $supplier->principal->pb_banks_3 }}"></td>
                          <td><input type="text" class="form-control border-0" name="pb_cont_officer_3" id="pb_cont_officer_3" value="{{ $supplier->principal->pb_cont_officer_3 }}"></td>
                          <td><input type="text" class="form-control border-0" name="pb_tel_no_3" id="pb_tel_no_3" value="{{ $supplier->principal->pb_tel_no_3 }}"></td>
                        </tr>
                      </tbody>
                  </table>
              </div>
            </div>

            <div class="mb-3 row">
                <label for="" class="col-md-12 form-label fw-bold">3 Major Products ( Presents ) :</label>
              <div class="col-md-12">
                <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col" class="bg-info text-dark">Company</th>
                          <th scope="col" class="bg-info text-dark">Product Type</th>
                          <th scope="col" class="bg-info text-dark">Brand Name</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                            <td><input type="text" class="form-control border-0" name="m3p_company_1" id="m3p_company_1" value="{{ $supplier->m3p->m3p_company_1 }}" readonly></td>
                            <td><input type="text" class="form-control border-0" name="m3p_prod_type_1" id="m3p_prod_type_1" value="{{ $supplier->m3p->m3p_prod_type_1 }}" readonly></td>
                            <td><input type="text" class="form-control border-0" name="m3p_brand_name_1" id="m3p_brand_name_1" value="{{ $supplier->m3p->m3p_company_1 }}" readonly></td>
                        </tr>
                        <tr>
                          <td><input type="text" class="form-control border-0" name="m3p_company_2" id="m3p_company_2" value="{{ $supplier->m3p->m3p_company_2 }}" readonly></td>
                          <td><input type="text" class="form-control border-0" name="m3p_prod_type_2" id="m3p_prod_type_2" value="{{ $supplier->m3p->m3p_prod_type_2 }}" readonly></td>
                          <td><input type="text" class="form-control border-0" name="m3p_brand_name_2" id="m3p_brand_name_2" value="{{ $supplier->m3p->m3p_company_2 }}" readonly></td>
                        </tr>
                        <tr>
                          <td><input type="text" class="form-control border-0" name="m3p_company_3" id="m3p_company_3" value="{{ $supplier->m3p->m3p_company_3 }}" readonly></td>
                          <td><input type="text" class="form-control border-0" name="m3p_prod_type_3" id="m3p_prod_type_3" value="{{ $supplier->m3p->m3p_prod_type_3 }}" readonly></td>
                          <td><input type="text" class="form-control border-0" name="m3p_brand_name_3" id="m3p_brand_name_3" value="{{ $supplier->m3p->m3p_company_3 }}" readonly></td>
                        </tr>
                      </tbody>
                  </table>
              </div>
            </div>

            <div class="mb-3 row">
                <label for="Gender" class="col-md-4 form-label fw-bold">Terms of Payment ( To be given to Bulla Crave ) : </label>
                <div class="col-md-5">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="terms_payment" value="Cash on Delivery" {{ $supplier->terms_payment === 'Cash on Delivery' ? 'checked' : '' }} disabled>
                        <label class="form-check-label">Cash on Delivery</label>
                    </div>
            
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="terms_payment" value="30 Days" {{ $supplier->terms_payment === '30 Days' ? 'checked' : '' }} disabled>
                        <label class="form-check-label">30 Days</label>
                    </div>
            
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="terms_payment" value="60 Days" {{ $supplier->terms_payment === '60 Days' ? 'checked' : '' }} disabled>
                        <label class="form-check-label">60 Days</label>
                    </div>
            
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="terms_payment" value="90 Days" {{ $supplier->terms_payment === '90 Days' ? 'checked' : '' }} disabled>
                        <label class="form-check-label">90 Days</label>
                    </div>
                </div>
            </div>
            

            <div class="mb-3 row">
                <label for="" class="col-md-1 form-label fw-bold">Others : </label>
              <div class="col-md-11">
                <input type="text" class="form-control" name="others" value="{{ $supplier->others }}" disabled>
              </div>
            </div>

            <div class="mb-3 row">
                <label for="" class="col-md-6 form-label fw-bold">Credit Line Limit ( to be given to Bulla Crave, Please State Amount ) : </label>
              <div class="col-md-6">
                <input type="number" class="form-control" name="credit_amount" value="{{ $supplier->credit_amount }}" disabled>
              </div>
            </div>

            <div class="mb-3 row">
                <label for="" class="col-md-3 form-label fw-bold">No. of Delivery Vehicles Owned : </label>
              <div class="col-md-9">
                <input type="number" class="form-control" name="no_of_vehicle" value="{{ $supplier->no_of_vehicle }}" disabled>
              </div>
            </div>

            <hr class="mt-3 mb-4"> <!-- Horizontal Line -->

            <div class="mb-3 row">
                <label for="" class="col-md-10 form-label fw-bold">Business Registry ( Indicate Existing Permit Numbers. Write N/A if unnecessary. and Attach Photocopy of permits herein. ) </label>
            </div>

              <div class="col-md-12">
                <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col" class="bg-info text-dark">Type of Permit</th>
                          <th scope="col" class="bg-info text-dark">Permit No.</th>
                          <th scope="col" class="bg-info text-dark">Permit File</th>
                          <th scope="col" class="bg-info text-dark">Date Issued</th>
                          <th scope="col" class="bg-info text-dark">Expiration Date</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                            <td>Securities and Exchange Commision</td>
                            <td><input type="text" class="form-control border-0" name="br_permit_no_1" id="br_permit_no_1" value="{{ $supplier->business->br_permit_no_1 }}" readonly></td>
                        
                            <td><input type="date" class="form-control border-0" name="br_date_issued_1" id="br_date_issued_1" value="{{ $supplier->business->br_date_issued_1 }}" readonly></td>
                            <td><input type="date" class="form-control border-0" name="br_expi_date_1" id="br_expi_date_1" value="{{ $supplier->business->br_expi_date_1 }}" readonly></td>
                        </tr>
                        <tr>
                          <td>Department of Trade and Industry</td>
                          <td><input type="text" class="form-control border-0" name="br_permit_no_1" id="br_permit_no_1" value="{{ $supplier->business->br_permit_no_2 }}" readonly></td>
                          {{-- @foreach ($files as $file)
                          <td><a href="{{ asset('supplier_files/permits' . $file) }}" target="_blank">{{ basename($file) }}</a></td>
                          @endforeach --}}
                          <td><input type="date" class="form-control border-0" name="br_date_issued_1" id="br_date_issued_1" value="{{ $supplier->business->br_date_issued_2 }}" readonly></td>
                          <td><input type="date" class="form-control border-0" name="br_expi_date_1" id="br_expi_date_1" value="{{ $supplier->business->br_expi_date_2 }}" readonly></td>
                        </tr>
                        <tr>
                          <td>Business Permit from the Office of the Mayor</td>
                          <td><input type="text" class="form-control border-0" name="br_permit_no_3" id="br_permit_no_3" value="{{ $supplier->business->br_permit_no_3 }}" readonly></td>
                          <td></td>
                          <td><input type="date" class="form-control border-0" name="br_date_issued_3" id="br_date_issued_3" value="{{ $supplier->business->br_date_issued_3 }}" readonly></td>
                          <td><input type="date" class="form-control border-0" name="br_expi_date_3" id="br_expi_date_3" value="{{ $supplier->business->br_expi_date_3 }}" readonly></td>
                        </tr>
                        <tr>
                          <td>Vat Registry Number ( BIR 2303 )</td>
                          <td><input type="text" class="form-control border-0" name="br_permit_no_4" id="br_permit_no_4" value="{{ $supplier->business->br_permit_no_4 }}" readonly></td>
                          <td></td>
                          <td><input type="date" class="form-control border-0" name="br_date_issued_4" id="br_date_issued_4" value="{{ $supplier->business->br_date_issued_4 }}" readonly></td>
                          <td><input type="date" class="form-control border-0" name="br_expi_date_4" id="br_expi_date_4" value="{{ $supplier->business->br_expi_date_4 }}" readonly></td>
                        </tr>
                      </tbody>
                  </table>

                    <div class="mb-3 row">
                        <label class="form-label col-md-2 fw-bold">Insert Permit File</label>
                        <div class="col-md-9">
                          <button type="button" class="btn btn-primary" onclick="document.getElementById('fileInput').click()">Choose File</button>
                          <input type="file" class="form-control" name="permit_file" id="fileInput" style="display: none;">
                        </div>
                    </div>

                  <hr class="mt-4 mb-3"> <!-- Horizontal Line -->

                    <div class="mb-3">
                        <label for="" class="col-md-10 form-label fw-bold">DOCUMENTS / PAPERS NEEDED FOR ACCREDICATION : ( Photocopy Only )</label>
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">&#42; Articles of Incorporationn</div>
                                    <div class="col-6">&#42; DENR Permits License ( for EMS-related supplier/subcon)</div>
                                        </div>
                                <div class="row">
                                    <div class="col-6">&#42; DTI Registration of Business Name</div>
                                        <div class="col-6">&#42; Company Profile / Organizational Chart / Track Record</div>
                                            </div>
                                <div class="row">
                                    <div class="col-6">&#42; SSS Membership Certification</div>
                                        <div class="col-6">&#42; Office / Plant Location Map / Sketch</div>
                                            </div>
                                <div class="row">
                                    <div class="col-6">&#42; Business Permit ( Latest )</div>
                                            <div class="col-6">&#42; Sample / Photocopies of Sales Invoice and O.R.</div>
                                                </div>
                                <div class="row">
                                    <div class="col-6">&#42; TIN / VAT Registration Certificate</div>
                                        <div class="col-6">&#42; DOLE Registration ( For Subcon )</div>
                                            </div>

                                <div class="row">
                                    <div class="col-6">&#42; Audited Financial Statement ( 3 Years )</div>
                                        <div class="col-6">&#42; PCAB License ( For Subcon )</div>
                                            </div>
                            </div>  
                    </div>

                    <hr>
                    <div class="float-right mt-0 mb-3">
                        <a href="{{ route('supplier.all') }}" class="btn btn-success" data-dismiss="modal">BACK</a>
                    </div>
                </form>
    </div>

@endsection