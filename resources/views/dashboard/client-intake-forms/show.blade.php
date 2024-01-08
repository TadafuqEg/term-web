@extends('dashboard.layouts.app')
@push('page_title')
Quotation Forms
@endpush
@section('content')
<!--begin::Tables Widget 9-->
<div class="card mb-5 mb-xl-10">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">Quotation Forms info</span>
        </h3>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">
            <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">First name</label>
                  <input type="text" class="form-control" readonly value="{{$clientIntakeForm->first_name??''}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text" class="form-control" readonly value="{{$clientIntakeForm->last_name??''}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" readonly value="{{$clientIntakeForm->email??''}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">phone</label>
                    <input type="text" class="form-control" readonly value="{{$clientIntakeForm->phone??''}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Company/Organization</label>
                    <input type="text" class="form-control" readonly value="{{$clientIntakeForm->company_or_organization??''}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Position</label>
                    <input type="text" class="form-control" readonly value="{{$clientIntakeForm->position??''}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" readonly value="{{$clientIntakeForm->address??''}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">PostalCode</label>
                    <input type="text" class="form-control" readonly value="{{$clientIntakeForm->postal_code??''}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Country</label>
                    <input type="text" class="form-control" readonly value="{{$clientIntakeForm->country??''}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                    <input type="text" class="form-control" readonly value="{{$clientIntakeForm->city??''}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">State</label>
                    <input type="text" class="form-control" readonly value="{{$clientIntakeForm->state??''}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Empty</label>
                    <input type="text" class="form-control" readonly value="{{$clientIntakeForm->empty??''}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Subject of the study : For which company, brand, persona, or organization do you wish
                        to conduct a study with us ?</label>
                    <input type="text" class="form-control" readonly value="{{$clientIntakeForm->subject_of_study??''}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Please give us the list of the keywords (company and/or organisation and/or brand(s)
                        and/or persona(s)) that the subject of the study is known for (separate each keyword with
                        a “;”)</label>
                    <input type="text" class="form-control" readonly value="{{$clientIntakeForm->list_of_the_keywords_company_or_organization_or_brand_or_persona??''}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Please give us the list of the hashtags the subject of the study typically uses (brand,
                        slogan, etc), those associated with it (events, promotion, etc), or ones you simply want us
                        to monitor for you (separate each keyword with a “;”)</label>
                    <input type="text" class="form-control" readonly value="{{$clientIntakeForm->list_of_the_hashtags_the_subject_of_the_study_typically_uses??''}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Please select the research sources you would like us to explore</label>
                    <input type="text" class="form-control" readonly value="{{$clientIntakeForm->research_sources_you_would_like_us_to_explore?implode(', ',unserialize($clientIntakeForm->research_sources_you_would_like_us_to_explore)):''}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Besides the proposed sources, are there any other sources you find interesting to
                        explore? (Please separate sources with a " ; " if there are many)</label>
                    <input type="text" class="form-control" readonly value="{{$clientIntakeForm->besides_the_proposed_sources??''}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Is there a specific known URL or groups/pages in social media that you have has a
                        specific interest on ? (Please separate sources with a " ; " if there are many)
                        </label>
                    <input type="text" class="form-control" readonly value="{{$clientIntakeForm->specific_known_URL_or_groups_or_pages_in_social_media??''}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">
                        Please provide, if applicable, the URL addresses of accounts related to the subject of the
study online presence (Please separate different URL with a ";" if there are multiple.)
                    </label>
                    <input type="text" class="form-control" readonly value="{{$clientIntakeForm->url_addresses_of_accounts_related_subject_study_online_presence??''}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Which service delivery formula are you interested in?
                    </label>
                    <input type="text" class="form-control" readonly value="{{$clientIntakeForm->service_delivery_formula_are_you_interested_in??''}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Which service delivery formula are you interested in?
                    </label>
                    <input type="text" class="form-control" readonly value="{{$clientIntakeForm->service_delivery_formula_are_you_interested_in_2??''}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Specific Period</label>
                    <input type="text" class="form-control" readonly value="{{$clientIntakeForm->specific_period??''}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Please provide any information that you believe is important for the successful
                        completion of the study</label>
                    <input type="text" class="form-control" readonly value="{{$clientIntakeForm->information_believe_important_for_successful_completion_study??''}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">
                        Social Listening - Please select the analyses you would like to be included in your study
                    </label>
                    <input type="text" class="form-control" readonly value="{{$clientIntakeForm->social_Listening_analyses_you_would_like_to_be_included??''}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">
                        Social Presence - Please select the analyses you would like to be included in your study
                    </label>
                    <input type="text" class="form-control" readonly value="{{$clientIntakeForm->social_Presence_analyses_you_would_like_to_be_included??''}}">
                  </div>

                
              </form>
        </div>
        <!--end::Table container-->
    </div>
    <!--begin::Body-->
</div>
<!--end::Tables Widget 9-->
@endsection