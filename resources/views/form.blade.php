@extends('Layout.app')
@section('title')
    Supplier Form
@endsection
@section('content')

    <div class="container mt-5 border">
        <img src="images/BullaCraveLogo.jpg" height="250px" width="100%" class="mt-3">
            <div class="text-center">
                <h5 class="fw-bold mb-0"><i>Washing with a Better Technology</i></h5>
                    <h5 class="text-danger fw-bold">Authorized Dealer of LG Commercial Laundry</h5>
                        <h4 class="mb-0 fw-bold">BULLA CRAVE LAUNDRY MACHINE TRADING</h4>
                            <h6 class="mb-2" style="font-size: 12px">Procurement Office 93 ECG Building General Avenue Tandang Sora Quezon City</h6>
                                <h6 style="font-size: 12px">Tel No. (02) 8721 8960</h6>
            </div>
        <h4 class="bg-dark text-white text-center pt-3 pb-3 fw-bold">SUPPLIER ACCREDITATION FORM</h4>
        <h5 class="text-center text-danger">CONFIDENTIAL</h5>

        <form method="post" class="row g-0 mt-5 ms-5 me-5">
            <div class="mb-3 row justify-content-end">
                <label class="col-md-2 col-form-label text-md-end">Date Submitted:</label>
                  <div class="col-md-3">
                    <input type="date" class="form-control" name="datesub" id="datesub" placeholder="Enter Date" required="required">
                  </div>
            </div>

            <!-- BASIC INFORMATION FORMS -->
            <div class="mb-3 row">
                <label for="" class="col-md-2 form-label fw-bold">Company Name : </label>
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="company_name" id="company_name" maxlength="255" placeholder="Company name" required="required">
                    </div>
            </div>

            <div class="mb-1 row">
                <label for="" class="col-md-2 form-label fw-bold">Company Address : </label>
              <div class="col-md-5">
                <input type="text" class="form-control" name="company_addr" id="company_addr" maxlength="255" placeholder="Company Address" required="required">
              </div>

              <label for="" class="col-md-1 form-label fw-bold">Phone No.  </label>
              <div class="col-md-4">
                <input type="number" class="form-control" name="company_phone" id="phoneInput" placeholder="Phone no." required="required" oninput="validatePhoneNumber(this)">
                <script>
                    function validatePhoneNumber(input) {
                        const phoneNumber = input.value.replace(/\D/g, ''); // Remove non-digit characters
                        if (phoneNumber.length > 13) {
                            input.value = phoneNumber.slice(0, 13); } }
                </script>
              </div>
            </div>

            <div class="mb-3 row">
                <label for="" class="col-md-2 form-label fw-bold">Plant / Warehouse : </label>
              <div class="col-md-5">
                <input type="text" class="form-control" name="plant_ware" id="plant_ware" maxlength="255" placeholder="Plant / Warehouse" required="required">
              </div>

              <label  class="col-md-1 form-label fw-bold">Fax No.</label>
              <div class="col-md-4">
                <input type="number" class="form-control" name="fax_no" id="fax_no" placeholder="Fax No." required="required" pattern="\d{15}">
              </div>
            </div>

            <div class="mb-3 row">
                <label for="" class="col-md-2 form-label fw-bold">Email Address : </label>
              <div class="col-md-10">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required="required">
              </div>
            </div>

            <div class="mb-3 row">
                <label for="Gender" class="col-md-2 form-label fw-bold">Types of Business :</label>
                <div class="col-md-8">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tob" value="Single Proprietorship" required="required">
                        <label class="form-check-label">Single Proprietorship</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tob" value="Partnership" required="required">
                        <label class="form-check-label">Partnership</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tob" value="Corporation" required="required">
                        <label class="form-check-label">Corporation</label>
                    </div>
                </div>
            </div>

            <div class="mb-1 row">
                    <label for="" class="col-md-2 form-label fw-bold">Authorized Capitalization : </label>
                <div class="col-md-5">
                    <input type="text" class="form-control" name="auth_capital" id="auth_capital" placeholder="Authorized Capitalization" required="required">
                </div>

                <label for="" class="col-md-1 form-label fw-bold">No. of Years in Business</label>
                <div class="col-md-4">
                    <input type="number" class="form-control" name="yrs_business" id="" placeholder="No. of Years in Business" required="required">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="" class="col-md-2 form-label fw-bold">Nature of Business : </label>
              <div class="col-md-4">
                <input type="text" class="form-control" name="nature_business" id="" placeholder="Nature of Business" required="required">
              </div>
            </div>

            <div class="mb-3 row">
                <label for="" class="col-md-2 form-label fw-bold">Product Lines : </label>
              <div class="col-md-4">
                <input type="text" class="form-control" name="prod_lines" id="prod_lines" placeholder="Product Lines" required="required">
              </div>
            </div>

            <div class="mb-3 row">
                <label for="" class="col-md-2 form-label fw-bold">Source of Materials : </label>
              <div class="col-md-4">
                <input type="text" class="form-control" name="src_materials" id="src_materials" placeholder="Source of Materials" required="required">
              </div>
            </div>

            <div class="mb-3 row">
                <label for="" class="col-md-2 form-label fw-bold">Principal Address : </label>
              <div class="col-md-4">
                <input type="text" class="form-control" name="principal_addrs" id="principal_addrs" placeholder="Principal Address" required="required">
              </div>
            </div>

            <!-- END OF BASIC INFORMATION FORMS -->

            <div class="mb-3 row">
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
            </div>

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
                          <td><input type="text" class="form-control border-0" name="mcp_name" id="mcp_name" placeholder="Enter Name" required="required"></td>
                          <td><input type="text" class="form-control border-0" name="mcp_addrs" id="mcp_addrs" placeholder="Enter Address" required="required"></td>
                          <td><input type="text" class="form-control border-0" name="mcp_contact" id="mcp_contact" placeholder="Enter Contact No." required="required"></td>
                          <td><input type="text" class="form-control border-0" name="mcp_cont_person" id="mcp_cont_person" placeholder="Enter Contact Person" required="required"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control border-0" name="mcp_name" id="mcp_name" placeholder="Enter Name"></td>
                            <td><input type="text" class="form-control border-0" name="mcp_addrs" id="mcp_addrs" placeholder="Enter Address"></td>
                            <td><input type="text" class="form-control border-0" name="mcp_contact" id="mcp_contact" placeholder="Enter Contact No."></td>
                            <td><input type="text" class="form-control border-0" name="mcp_cont_person" id="mcp_cont_person" placeholder="Enter Contact Person"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control border-0" name="mcp_name" id="mcp_name" placeholder="Enter Name"></td>
                            <td><input type="text" class="form-control border-0" name="mcp_addrs" id="mcp_addrs" placeholder="Enter Address"></td>
                            <td><input type="text" class="form-control border-0" name="mcp_contact" id="mcp_contact" placeholder="Enter Contact No."></td>
                            <td><input type="text" class="form-control border-0" name="mcp_cont_person" id="mcp_cont_person" placeholder="Enter Contact Person"></td>
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
                          <td><input type="text" class="form-control border-0" name="pb_banks" id="pb_banks" placeholder="Enter Banks"></td>
                          <td><input type="text" class="form-control border-0" name="pb_cont_officer" id="pb_cont_officer" placeholder="Enter Contact Officer"></td>
                          <td><input type="text" class="form-control border-0" name="pb_tel_no" id="pb_tel_no" placeholder="Enter Telephone No."></td>
                        </tr>
                        <tr>
                          <td><input type="text" class="form-control border-0" name="pb_banks" id="pb_banks" placeholder="Enter Banks"></td>
                          <td><input type="text" class="form-control border-0" name="pb_cont_officer" id="pb_cont_officer" placeholder="Enter Contact Officer"></td>
                          <td><input type="text" class="form-control border-0" name="pb_tel_no" id="pb_tel_no" placeholder="Enter Telephone No."></td>
                        </tr>
                        <tr>
                          <td><input type="text" class="form-control border-0" name="pb_banks" id="pb_banks" placeholder="Enter Banks"></td>
                          <td><input type="text" class="form-control border-0" name="pb_cont_officer" id="pb_cont_officer" placeholder="Enter Contact Officer"></td>
                          <td><input type="text" class="form-control border-0" name="pb_tel_no" id="pb_tel_no" placeholder="Enter Telephone No."></td>
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
                            <td><input type="text" class="form-control border-0" name="3mp_company" id="3mp_company" placeholder="Enter Company"></td>
                            <td><input type="text" class="form-control border-0" name="3mp_prod_type" id="3mp_prod_type" placeholder="Enter Product Type"></td>
                            <td><input type="text" class="form-control border-0" name="3mp_brand_name" id="3mp_brand_name" placeholder="Enter Brand Name"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control border-0" name="3mp_company" id="3mp_company" placeholder="Enter Company"></td>
                            <td><input type="text" class="form-control border-0" name="3mp_prod_type" id="3mp_prod_type" placeholder="Enter Product Type"></td>
                            <td><input type="text" class="form-control border-0" name="3mp_brand_name" id="3mp_brand_name" placeholder="Enter Brand Name"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control border-0" name="3mp_company" id="3mp_company" placeholder="Enter Company"></td>
                            <td><input type="text" class="form-control border-0" name="3mp_prod_type" id="3mp_prod_type" placeholder="Enter Product Type"></td>
                            <td><input type="text" class="form-control border-0" name="3mp_brand_name" id="3mp_brand_name" placeholder="Enter Brand Name"></td>
                        </tr>
                      </tbody>
                  </table>
              </div>
            </div>

            <div class="mb-3 row">
                <label for="Gender" class="col-md-4 form-label fw-bold">Terms of Payment ( To be given to Bulla Crave ) : </label>
                <div class="col-md-5">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="terms_payment" value="Cash on Delivery" required="required">
                        <label class="form-check-label">Cash on Delivery</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="terms_payment" value="30 Days" required="required">
                        <label class="form-check-label">30 Days</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="terms_payment" value="60 Days" required="required">
                        <label class="form-check-label">60 Days</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="terms_payment" value="90 Days" required="required">
                        <label class="form-check-label">90 Days</label>
                    </div>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="" class="col-md-1 form-label fw-bold">Others : </label>
              <div class="col-md-11">
                <input type="text" class="form-control" name="others" id="others" placeholder="Others">
              </div>
            </div>

            <div class="mb-3 row">
                <label for="" class="col-md-6 form-label fw-bold">Credit Line Limit ( to be given to Bulla Crave, Please State Amount ) : </label>
              <div class="col-md-6">
                <input type="number" class="form-control" name="credit_amount" id="credit_amount" placeholder="Amount" required="required">
              </div>
            </div>

            <div class="mb-3 row">
                <label for="" class="col-md-3 form-label fw-bold">No. of Delivery Vehicles Owned : </label>
              <div class="col-md-9">
                <input type="number" class="form-control" name="no_of_vehicle" id="no_vehicle" placeholder="No. of Delivery Vehicles Owned " required="required">
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
                          <th scope="col" class="bg-info text-dark">Date Issued</th>
                          <th scope="col" class="bg-info text-dark">Expiration Date</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                            <td>Securities and Exchange Commision</td>
                            <input type="hidden" name="type_of_permit" value="Securities and Exchange Commision">
                            <td><input type="text" class="form-control border-0" name="br_permit_no" id="br_permit_no" placeholder="Permit No."></td>
                            <td><input type="date" class="form-control border-0" name="br_date_issued" id="br_date_issuede" placeholder="Date Issued"></td>
                            <td><input type="date" class="form-control border-0" name="br_expi_date" id="br_expi_date" placeholder="Expiration Date"></td>
                        </tr>
                        <tr>
                          <td>Department of Trade and Industry</td>
                          <input type="hidden" name="type_of_permit" value="Department of Trade and Industry">
                          <td><input type="text" class="form-control border-0" name="br_permit_no" id="br_permit_no" placeholder="Permit No."></td>
                          <td><input type="date" class="form-control border-0" name="br_date_issued" id="br_date_issuede" placeholder="Date Issued"></td>
                          <td><input type="date" class="form-control border-0" name="br_expi_date" id="br_expi_date" placeholder="Expiration Date"></td>
                        </tr>
                        <tr>
                          <td>Business Permit from the Office of the Mayor</td>
                          <input type="hidden" name="type_of_permit" value="Business Permit form the Office of the Mayor">
                          <td><input type="text" class="form-control border-0" name="br_permit_no" id="br_permit_no" placeholder="Permit No."></td>
                          <td><input type="date" class="form-control border-0" name="br_date_issued" id="br_date_issuede" placeholder="Date Issued"></td>
                          <td><input type="date" class="form-control border-0" name="br_expi_date" id="br_expi_date" placeholder="Expiration Date"></td>
                        </tr>
                        <tr>
                          <td>Vat Registry Number ( BIR 2303 )</td>
                          <input type="hidden" name="type_of_permit" value="Vat Registry Number ( BIR 2303 )">
                          <td><input type="text" class="form-control border-0" name="br_permit_no" id="br_permit_no" placeholder="Permit No."></td>
                          <td><input type="date" class="form-control border-0" name="br_date_issued" id="br_date_issuede" placeholder="Date Issued"></td>
                          <td><input type="date" class="form-control border-0" name="br_expi_date" id="br_expi_date" placeholder="Expiration Date"></td>
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
                            <div class="col-6">&#42; udited Financial Statement ( 3 Years )</div>
                            <div class="col-6">&#42; PCAB License ( For Subcon )</div>
                        </div>


                      </div>

                      
                    </div>
                    <hr>
                    <div class="float-end mt-0 mb-3">
                        <button type="submit" name="insert" class="btn btn-primary">Insert</button>
                        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
    </div>

@endsection