<form class="contact_form Quick" id="contact_form" name="contact_form" action="#" method="post" novalidate="novalidate">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <input id="form_name" name="form_name" class="form-control" required="required" type="text" placeholder="Name">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input id="form_email" name="form_email" class="form-control required email" required="required" type="email" placeholder="Email">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input id="form_phone" name="form_phone" class="form-control required phone" required="required" type="phone" placeholder="Phone">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input id="SpecialOfferOption" name="sform_specialoffer" class="form-control" type="text" readonly>
            </div>
            <!-- <ul class=v class="search_option_two">
                        <div class="candidate_revew_select">
                            <select id="SpecialOfferOption" class="selectpicker w100 show-tick">
                                <option value="default">Select Offer</option>
                                <option value="floor">Floor Plan</option>
                                <option value="elevation">Elevation</option>
                                <option value="vastu">Vastu Consultancy</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                    </div>
                </li>
            </ul> -->
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <textarea id="form_message" name="form_message" class="form-control Small required" rows="8" required="required" placeholder="Your Message"></textarea>
            </div>
            <div class="form-group mb0 text-center mb20">
                <button type="button" class="btn btn-lg btn-thm">Submit</button>
            </div>
        </div>
    </div>
</form>