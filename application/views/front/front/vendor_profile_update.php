

            <div class="col-sm-12 col-lg-8 col-xl-10">
                <div class="row">
                    <div class="col-lg-12 mb10">
                        <div class="breadcrumb_content style2">
                            <span class="FilterButton">Menu</span>
                            <h2 class="breadcrumb_title">Update Profile</h2>
                            <p>We are glad to see you again!</p>
                        </div>
                    </div>                    
                    <div class="col-xl-12">
                        <div class="my_dashboard_review">

						<form method="post" enctype='multipart/form-data'>
									<?php echo @$msg;?>

                            <div class="row">
                                <div class="col-lg-12">

								

                                    <div class="mb30">
                                        <img class="ProfilePic" src="<?php echo base_url('uploads/vendor/'.$user->image);?>" /><br />
                                        <div class="wrap-custom-file Doc">
                                            <input type="file" name="profile_image" id="pic" accept=".jpeg, .jpg" />
                                            <label  for="pic">
                                                <span><i class="flaticon-download"></i> Upload Profile Pic</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-md-4">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" value="<?php echo $user->name;?>" class="form-control" id="name" required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-md-4">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="name">Company Name</label>
										<input type="text" name="company" value="<?php echo $user->company;?>" class="form-control" required id="cname">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-md-4">
                                    <div class="my_profile_setting_input ui_kit_select_search form-group">
                                        <label for="stype">Service Type</label>
                                        <select class="selectpicker" data-live-search="true" data-width="100%" id="stype">
                                            <option>Select Type</option>
                                            <option>Designer</option>
                                            <option>Contractor</option>
                                            <option>Supplier</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-md-4">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="mobile">Mobile No.</label>
                                        <input type="text" name="mobile" value="<?php echo $user->mobile;?>" class="form-control" required id="mobile">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-md-4">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" value="<?php echo $user->email;?>" class="form-control" required id="email">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" name="description" id="description"><?php echo $user->description;?></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-md-4">
                                    <div class="my_profile_setting_input ui_kit_select_search form-group">
                                        <label for="state">State</label>
                                        <select class="selectpicker" data-live-search="true" data-width="100%" name="state" id="state">
                                            <option value="0">Select State</option><option value="1">Andaman and Nicobar Islands</option><option value="2">Andhra Pradesh</option><option value="3">Arunachal Pradesh</option><option value="4">Assam</option><option value="5">Bihar</option><option value="6">Chandigarh</option><option value="7">Chhattisgarh</option><option value="8">Dadra and Nagar Haveli</option><option value="9">Daman and Diu</option><option value="10">Delhi</option><option value="11">Goa</option><option value="12">Gujarat</option><option value="13">Haryana</option><option value="14">Himachal Pradesh</option><option value="15">Jammu and Kashmir</option><option value="16">Jharkhand</option><option value="17">Karnataka</option><option value="18">Kenmore</option><option value="19">Kerala</option><option value="20">Lakshadweep</option><option value="21">Madhya Pradesh</option><option value="22">Maharashtra</option><option value="23">Manipur</option><option value="24">Meghalaya</option><option value="25">Mizoram</option><option value="26">Nagaland</option><option value="27">Narora</option><option value="28">Natwar</option><option value="29">Odisha</option><option value="30">Paschim Medinipur</option><option value="31">Pondicherry</option><option value="32">Punjab</option><option value="33">Rajasthan</option><option value="34">Sikkim</option><option value="35">Tamil Nadu</option><option value="36">Telangana</option><option value="37">Tripura</option><option value="38">Uttar Pradesh</option><option value="39">Uttarakhand</option><option value="40">Vaishali</option><option value="41">West Bengal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-md-4">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" list="city_list" name="city" id="city">
                                        <datalist id="city_list">
                                            <option>Agar</option><option>Ajaigarh</option><option>Akoda</option><option>Akodia</option><option>Alampur</option><option>Alirajpur</option><option>Alot</option><option>Amanganj</option><option>Amarkantak</option><option>Amarpatan</option><option>Amarwara</option><option>Ambada</option><option>Ambah</option><option>Amla</option><option>Amlai</option><option>Anjad</option><option>Antri</option><option>Anuppur</option><option>Aron</option><option>Ashoknagar</option><option>Ashta</option><option>Babai</option><option>Bada Malhera</option><option>Badagaon</option><option>Badagoan</option><option>Badarwas</option><option>Badawada</option><option>Badi</option><option>Badkuhi</option><option>Badnagar</option><option>Badnawar</option><option>Badod</option><option>Badoda</option><option>Badra</option><option>Bagh</option><option>Bagli</option><option>Baihar</option><option>Baikunthpur</option><option>Bakswaha</option><option>Balaghat</option><option>Baldeogarh</option><option>Bamaniya</option><option>Bamhani</option><option>Bamor</option><option>Bamora</option><option>Banda</option><option>Bangawan</option><option>Bansatar Kheda</option><option>Baraily</option><option>Barela</option><option>Barghat</option><option>Bargi</option><option>Barhi</option><option>Barigarh</option><option>Barwaha</option><option>Barwani</option><option>Basoda</option><option>Begamganj</option><option>Beohari</option><option>Berasia</option><option>Betma</option><option>Betul</option><option>Betul Bazar</option><option>Bhainsdehi</option><option>Bhamodi</option><option>Bhander</option><option>Bhanpura</option><option>Bharveli</option><option>Bhaurasa</option><option>Bhavra</option><option>Bhedaghat</option><option>Bhikangaon</option><option>Bhilakhedi</option><option>Bhind</option><option>Bhitarwar</option><option>Bhopal</option><option>Bhuibandh</option><option>Biaora</option><option>Bijawar</option><option>Bijeypur</option><option>Bijrauni</option><option>Bijuri</option><option>Bilaua</option><option>Bilpura</option><option>Bina Railway Colony</option><option>Bina-Etawa</option><option>Birsinghpur</option><option>Boda</option><option>Budhni</option><option>Burhanpur</option><option>Burhar</option><option>Chachaura Binaganj</option><option>Chakghat</option><option>Chandameta Butar</option><option>Chanderi</option><option>Chandia</option><option>Chandla</option><option>Chaurai Khas</option><option>Chhatarpur</option><option>Chhindwara</option><option>Chhota Chhindwara</option><option>Chichli</option><option>Chitrakut</option><option>Churhat</option><option>Daboh</option><option>Dabra</option><option>Damoh</option><option>Damua</option><option>Datia</option><option>Deodara</option><option>Deori</option><option>Deori Khas</option><option>Depalpur</option><option>Devendranagar</option><option>Devhara</option><option>Dewas</option><option>Dhamnod</option><option>Dhana</option><option>Dhanpuri</option><option>Dhar</option><option>Dharampuri</option><option>Dighawani</option><option>Diken</option><option>Dindori</option><option>Dola</option><option>Dumar Kachhar</option><option>Dungariya Chhapara</option><option>Gadarwara</option><option>Gairatganj</option><option>Gandhi Sagar Hydel Colony</option><option>Ganjbasoda</option><option>Garhakota</option><option>Garhi Malhara</option><option>Garoth</option><option>Gautapura</option><option>Ghansor</option><option>Ghuwara</option><option>Gogaon</option><option>Gogapur</option><option>Gohad</option><option>Gormi</option><option>Govindgarh</option><option>Guna</option><option>Gurh</option><option>Gwalior</option><option>Hanumana</option><option>Harda</option><option>Harpalpur</option><option>Harrai</option><option>Harsud</option><option>Hatod</option><option>Hatpipalya</option><option>Hatta</option><option>Hindoria</option><option>Hirapur</option><option>Hoshangabad</option><option>Ichhawar</option><option>Iklehra</option><option>Indergarh</option><option>Indore</option><option>Isagarh</option><option>Itarsi</option><option>Jabalpur</option><option>Jabalpur Cantonment</option><option>Jabalpur G.C.F</option><option>Jaisinghnagar</option><option>Jaithari</option><option>Jaitwara</option><option>Jamai</option><option>Jaora</option><option>Jatachhapar</option><option>Jatara</option><option>Jawad</option><option>Jawar</option><option>Jeronkhalsa</option><option>Jhabua</option><option>Jhundpura</option><option>Jiran</option><option>Jirapur</option><option>Jobat</option><option>Joura</option><option>Kailaras</option><option>Kaimur</option><option>Kakarhati</option><option>Kalichhapar</option><option>Kanad</option><option>Kannod</option><option>Kantaphod</option><option>Kareli</option><option>Karera</option><option>Kari</option><option>Karnawad</option><option>Karrapur</option><option>Kasrawad</option><option>Katangi</option><option>Katni</option><option>Kelhauri</option><option>Khachrod</option><option>Khajuraho</option><option>Khamaria</option><option>Khand</option><option>Khandwa</option><option>Khaniyadhana</option><option>Khargapur</option><option>Khargone</option><option>Khategaon</option><option>Khetia</option><option>Khilchipur</option><option>Khirkiya</option><option>Khujner</option><option>Khurai</option><option>Kolaras</option><option>Kotar</option><option>Kothi</option><option>Kotma</option><option>Kukshi</option><option>Kumbhraj</option><option>Kurwai</option><option>Lahar</option><option>Lakhnadon</option><option>Lateri</option><option>Laundi</option><option>Lidhora Khas</option><option>Lodhikheda</option><option>Loharda</option><option>Machalpur</option><option>Madhogarh</option><option>Maharajpur</option><option>Maheshwar</option><option>Mahidpur</option><option>Maihar</option><option>Majholi</option><option>Makronia</option><option>Maksi</option><option>Malaj Khand</option><option>Malanpur</option><option>Malhargarh</option><option>Manasa</option><option>Manawar</option><option>Mandav</option><option>Mandideep</option><option>Mandla</option><option>Mandleshwar</option><option>Mandsaur</option><option>Manegaon</option><option>Mangawan</option><option>Manglaya Sadak</option><option>Manpur</option><option>Mau</option><option>Mauganj</option><option>Meghnagar</option><option>Mehara Gaon</option><option>Mehgaon</option><option>Mhaugaon</option><option>Mhow</option><option>Mihona</option><option>Mohgaon</option><option>Morar</option><option>Morena</option><option>Morwa</option><option>Multai</option><option>Mundi</option><option>Mungaoli</option><option>Murwara</option><option>Nagda</option><option>Nagod</option><option>Nagri</option><option>Naigarhi</option><option>Nainpur</option><option>Nalkheda</option><option>Namli</option><option>Narayangarh</option><option>Narsimhapur</option><option>Narsingarh</option><option>Narsinghpur</option><option>Narwar</option><option>Nasrullaganj</option><option>Naudhia</option><option>Naugaon</option><option>Naurozabad</option><option>Neemuch</option><option>Nepa Nagar</option><option>Neuton Chikhli Kalan</option><option>Nimach</option><option>Niwari</option><option>Obedullaganj</option><option>Omkareshwar</option><option>Orachha</option><option>Ordinance Factory Itarsi</option><option>Pachmarhi</option><option>Pachmarhi Cantonment</option><option>Pachore</option><option>Palchorai</option><option>Palda</option><option>Palera</option><option>Pali</option><option>Panagar</option><option>Panara</option><option>Pandaria</option><option>Pandhana</option><option>Pandhurna</option><option>Panna</option><option>Pansemal</option><option>Parasia</option><option>Pasan</option><option>Patan</option><option>Patharia</option><option>Pawai</option><option>Petlawad</option><option>Phuph Kalan</option><option>Pichhore</option><option>Pipariya</option><option>Pipliya Mandi</option><option>Piploda</option><option>Pithampur</option><option>Polay Kalan</option><option>Porsa</option><option>Prithvipur</option><option>Raghogarh</option><option>Rahatgarh</option><option>Raisen</option><option>Rajakhedi</option><option>Rajgarh</option><option>Rajnagar</option><option>Rajpur</option><option>Rampur Baghelan</option><option>Rampur Naikin</option><option>Rampura</option><option>Ranapur</option><option>Ranipura</option><option>Ratangarh</option><option>Ratlam</option><option>Ratlam Kasba</option><option>Rau</option><option>Rehli</option><option>Rehti</option><option>Rewa</option><option>Sabalgarh</option><option>Sagar</option><option>Sagar Cantonment</option><option>Sailana</option><option>Sanawad</option><option>Sanchi</option><option>Sanwer</option><option>Sarangpur</option><option>Sardarpur</option><option>Sarni</option><option>Satai</option><option>Satna</option><option>Satwas</option><option>Sausar</option><option>Sehore</option><option>Semaria</option><option>Sendhwa</option><option>Seondha</option><option>Seoni</option><option>Seoni Malwa</option><option>Sethia</option><option>Shahdol</option><option>Shahgarh</option><option>Shahpur</option><option>Shahpura</option><option>Shajapur</option><option>Shamgarh</option><option>Sheopur</option><option>Shivpuri</option><option>Shujalpur</option><option>Sidhi</option><option>Sihora</option><option>Singolo</option><option>Singrauli</option><option>Sinhasa</option><option>Sirgora</option><option>Sirmaur</option><option>Sironj</option><option>Sitamau</option><option>Sohagpur</option><option>Sonkatch</option><option>Soyatkalan</option><option>Suhagi</option><option>Sultanpur</option><option>Susner</option><option>Suthaliya</option><option>Tal</option><option>Talen</option><option>Tarana</option><option>Taricharkalan</option><option>Tekanpur</option><option>Tendukheda</option><option>Teonthar</option><option>Thandia</option><option>Tikamgarh</option><option>Timarni</option><option>Tirodi</option><option>Udaipura</option><option>Ujjain</option><option>Ukwa</option><option>Umaria</option><option>Unchahara</option><option>Unhel</option><option>Vehicle Factory Jabalpur</option><option>Vidisha</option><option>Vijayraghavgarh</option><option>Waraseoni</option><option>Danish Nagar</option><option>surendra-nagar</option><option>district</option><option>ananthapur</option><option>kadapa</option><option>west godavari</option><option>palakol</option><option>east godavari</option><option>karim nagar</option><option>amlapuram</option><option>cachar</option><option>dima hasso - north cachar hill</option><option>karbi anglong</option><option>sonitpur</option><option>darrang</option><option>kamrup metropolitan</option><option>baksa</option><option>sonapur</option><option>arwal</option><option>auranagabad</option><option>jehanabad</option><option>kaimur bhabua</option><option>east champaran</option><option>rohtas</option><option>sheikhpura</option><option>nalanda</option><option>sheohar</option><option>na</option><option>west champaran</option><option>bilaspurcgh</option><option>janjgirchampa</option><option>janjgir-champa</option><option>bemetara</option><option>surguja</option><option>koriya</option><option>surajpur</option><option>balod bazer</option><option>bastar</option><option>bijapur(cgh)</option><option>sukma</option><option>makdi</option><option>east delhi</option><option>shahdara</option><option>north east delhi</option><option>new delhi</option><option>north delhi</option><option>north west delhi</option><option>central delhi</option><option>south delhi</option><option>south west delhi</option><option>west delhi</option><option>ahmedabad city</option><option>botab</option><option>mahesana</option><option>sabarkantha</option><option>aravalli</option><option>devbhoomi dwerka</option><option>gir somnath</option><option>kachchh</option><option>surendra nagar</option><option>mahisagar</option><option>tapi</option><option>dangs</option><option>narmada</option><option>panch mahals</option><option>chhotaudepur</option><option>dadra  nagar haveli</option><option>ambala city</option><option>mewat</option><option>hamirpurhp</option><option>bilaspur hp</option><option>hamirpur(hp)</option><option>bilaspur (hp)</option><option>lahul  spiti</option><option>kinnaur</option><option>poonch</option><option>ananthnag</option><option>ganderbal</option><option>shopian</option><option>giridh</option><option>koderma</option><option>garhwa</option><option>pakur</option><option>west singhbhum</option><option>seraikelakharsawan</option><option>east singhbhum</option><option>bangalore</option><option>bengaluru rural</option><option>ramanagar</option><option>ramanagara</option><option>ballari</option><option>belagavi</option><option>hubballi</option><option>dharwad</option><option>kalaburagi</option><option>uttara kannada</option><option>joida</option><option>bijapur(kar)</option><option>chickmagalur</option><option>chikkamagaluru</option><option>kodagu</option><option>dakshina kannada</option><option>mysuru</option><option>saraswathipuram</option><option>hanagodu</option><option>chamarajanagar</option><option>shivamogga</option><option>tumakuru</option><option>malappurm</option><option>lakshadweep</option><option>ashok nagar</option><option>agar malwa</option><option>jalgoan</option><option>south goa</option><option>north goa</option><option>raigarh(mh)</option><option>mumbai subueban</option><option>ahmed nagar</option><option>imphal west</option><option>ukhrul</option><option>tamenglong</option><option>chandel</option><option>imphal east</option><option>tengnoupal</option><option>thanlon</option><option>mammit</option><option>lawngtlai</option><option>aizawal</option><option>zunhebotto</option><option>kiphire</option><option>peren</option><option>longleng</option><option>south tripura</option><option>west tripura</option><option>gomati</option><option>sepahijala</option><option>agartala?</option><option>gomti</option><option>lower dibang valley</option><option>east siang</option><option>dibang valley</option><option>west siang</option><option>lohit</option><option>papum pare</option><option>west kameng</option><option>east kameng</option><option>lower subansiri</option><option>tirap</option><option>kurung kumey</option><option>upper siang</option><option>upper subansiri</option><option>upper dibang valley</option><option>dhalai</option><option>north tripura</option><option>west garo hills</option><option>jaintia hills</option><option>east khasi hills</option><option>south garo hills</option><option>east garo hills</option><option>ri bhoi</option><option>west khasi hills</option><option>west jaintia hills</option><option>south west khasi hills</option><option>east jaintia hills</option><option>khorda</option><option>baleswar</option><option>jajapur</option><option>mayurbhanj</option><option>nabarangapur</option><option>kandhamal</option><option>gajapati</option><option>kalahandi</option><option>boudh</option><option>debagarh</option><option>sundergarh</option><option>chandighar</option><option>ferozepur</option><option>nawanshahr</option><option>pratapghar</option><option>jhujhunu</option><option>jalor</option><option>sri ganganagar</option><option>tiruchirappalli</option><option>tiruppur</option><option>pudukkottai</option><option>tiruvarur</option><option>nilgiris</option><option>rangareddy</option><option>ranga reddy</option><option>zaheerabad</option><option>k.v.rangareddy</option><option>parkal</option><option>hanamkonda</option><option>jayashankar</option><option>bhupalpalli</option><option>kothagudem</option><option>kothagudem colls</option><option>mahabub nagar</option><option>nagar kurnool</option><option>stn. jadcherla</option><option>warangal rural</option><option>mahabuababad</option><option>bulandshahr</option><option>gautam buddha nagar</option><option>kanshiram nagar</option><option>raebareli</option><option>kaushambi</option><option>prayagraj allahabad</option><option>kanpur dehat</option><option>bagpat</option><option>kanpur nagar</option><option>sant ravidas nagar</option><option>shrawasti</option><option>sant kabir nagar</option><option>mahrajganj</option><option>chitrakoot</option><option>ambedkar nagar</option><option>chamoli</option><option>pauri garhwal</option><option>tehri garhwal</option><option>east sikkim</option><option>west sikkim</option><option>south sikkim</option><option>north sikkim</option><option>south andaman</option><option>north and middle andaman</option><option>nicobar</option><option>north &amp; middle andaman</option><option>north 24 parganas</option><option>birbhum</option><option>south 24 parganas</option><option>medinipur</option><option>east midnapore</option><option>darjeeling</option><option>west midnapore</option><option>south dinajpur</option><option>north dinajpur</option><option>bardhaman</option><option>paschim bardhaman</option><option>puruliya</option>
                                        </datalist>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-md-4">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="zip">Zip Code</label>
                                        <input type="text" class="form-control" name="zip" value="<?php echo $user->zip;?>" id="zip">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-md-4">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="experience">Experience (in Years)</label>
                                        <input type="text" class="form-control" name="experience" value="<?php echo $user->experience;?>" id="experience">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-md-4">
                                    <div class="my_profile_setting_input ui_kit_select_search form-group">
                                        <label for="practicing">Practicing Since</label>
                                        <select class="selectpicker" data-width="100%" name="practicing_since" >
                                            <option value="2019" <?php if($user->practicing_since == '2019') echo "selected";?>>2019</option>
                                            <option value="2018" <?php if($user->practicing_since == '2018') echo "selected";?>>2018</option>
                                            <option value="2017" <?php if($user->practicing_since == '2017') echo "selected";?>>2017</option>
                                            <option value="2016" <?php if($user->practicing_since == '2016') echo "selected";?>>2016</option>
                                            <option value="2015" <?php if($user->practicing_since == '2015') echo "selected";?>>2015</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-md-4">
                                    <div class="my_profile_setting_input ui_kit_select_search form-group">
                                        <label for="projects">Projects Delivered</label>
                                        <select class="selectpicker" data-live-search="true" data-width="100%" name="projects_delivered" id="projects">
                                            <option value="b5" <?php if($user->projects_delivered == 'b5') echo "selected";?>>Below 5</option>
                                            <option value="b10" <?php if($user->projects_delivered == 'b10') echo "selected";?>>Below 10</option>
                                            <option value="m10" <?php if($user->projects_delivered == 'm10') echo "selected";?>>More than 10</option>
                                            <option value="m20" <?php if($user->projects_delivered == 'm20') echo "selected";?>>More than 20</option>
                                            <option value="m50" <?php if($user->projects_delivered == 'm50') echo "selected";?>>More than 50</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-md-4">
                                    <div class="my_profile_setting_input ui_kit_select_search form-group">
                                        <label for="team">Team Size</label>
                                        <select class="selectpicker" data-live-search="true" data-width="100%" name="team_size" id="team">
                                            <option value="b5" <?php if($user->projects_delivered == 'b5') echo "selected";?>>Below 5</option>
                                            <option value="b10" <?php if($user->projects_delivered == 'b10') echo "selected";?>>Below 10</option>
                                            <option value="m10" <?php if($user->projects_delivered == 'm10') echo "selected";?>>More than 10</option>
                                            <option value="m20" <?php if($user->projects_delivered == 'm20') echo "selected";?>>More than 20</option>
                                            <option value="m50" <?php if($user->projects_delivered == 'm50') echo "selected";?>>More than 50</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-md-4">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="facebook">Facebook Link</label>
                                        <input type="text" class="form-control" name="facebook_link" value="<?php echo $user->facebook_link;?>" id="facebook">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-md-4">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="twitter">Twitter Link</label>
                                        <input type="text" class="form-control" name="twitter_link" value="<?php echo $user->experience;?>" id="twitter">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-md-4">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="linkedin">Linkedin Link</label>
                                        <input type="text" class="form-control" name="linkedin_link" value="<?php echo $user->experience;?>" id="linkedin">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-md-4">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="instagram">Instagram Link</label>
                                        <input type="text" class="form-control" name="instagram_link" value="<?php echo $user->instagram_link;?>" id="instagram">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-md-4">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="license">License No.</label>
                                        <input type="text" class="form-control" name="license_no" value="<?php echo $user->license_no;?>" id="license">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="my_profile_setting_input float-left">
                                        <div class="wrap-custom-file Doc">
                                            <input type="file" name="certificate"  id="docs" accept=".jpeg, .jpg, .pdf" />
                                            <label  for="docs">
                                                <span><i class="flaticon-download"></i> Upload Certificate</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="my_profile_setting_input float-right fn-520">
									<button type="submit" name="update_profile" class="btn btn2">Update Profile</button>
                                    </div>
                                </div>
                            </div>

							</form>

                        </div>
                    </div>
					

					<form method="post">  <?php echo @$pass_msg;?>
                    <div class="col-xl-12">
                        <h3 class="mt50 mb30">Change Password</h3>
                        <div class="my_dashboard_review">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="formGroupExampleOldPass">Old Password</label>
                                        <input type="text" class="form-control" id="formGroupExampleOldPass" name="old_pass">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-xl-6">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="formGroupExampleNewPass">New Password</label>
                                        <input type="text" class="form-control" id="formGroupExampleNewPass" name="new_pass">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-6">
                                    <div class="my_profile_setting_input form-group">
                                        <label for="formGroupExampleConfPass">Confirm New Password</label>
                                        <input type="text" class="form-control" id="formGroupExampleConfPass" name="confirm_pass">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="my_profile_setting_input float-right fn-520">
									<button type="submit" name="update_password" class="btn btn2">Update Password</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					</form>
                </div>
            </div>
        </div>
    </div>
</section>
