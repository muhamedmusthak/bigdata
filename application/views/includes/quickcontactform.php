<div class="smallContactBlock">
        <h3>Contact Us Now</h3>
        <form name="homesmallform" method="post" action="/forms/contact-submit.php" onsubmit="return ValidateSmallForm(this)" enctype="multipart/form-data">
  <input type="text" class="form-input-text" value="Name*" onfocus="if(this.value=='Name*')value=''" onblur="if(this.value=='')value='Name*';" name="FirstName" placeholder="Name*" size="30">
  <input type="text" class="form-input-text" value="Email*" onfocus="if(this.value=='Email*')value=''" onblur="if(this.value=='')value='Email*';" name="Email" placeholder="Email*">
  <input type="text" class="form-input-text" value="Telephone*" onfocus="if(this.value=='Telephone*')value=''" onblur="if(this.value=='')value='Telephone*';" name="phone" placeholder="Telephone*">
  <input type="text" class="form-Combo" value="Country*" onfocus="if(this.value=='Country*')value=''" onblur="if(this.value=='')value='Country*';" name="phone" placeholder="Country*">
<!--
  <select id="country" name="country" class="form-Combo" style="display: none;">
    <option value="">Select Country*</option>
    <option value="0001USA">USA</option>
    <option value="0002Canada">Canada</option>
    <option value="0003UK">UK</option>
    <option value="0004Australia">Australia</option>
    <option value="0005Singapore">Singapore</option>
    <option value="0006Japan">Japan</option>
    <option value="0007Russia">Russia</option>
    <option value="0008India">India</option>
    <option value="0009UAE">UAE</option>
    <option value="0010Saudi Arabia">Saudi Arabia</option>
    <option value="0011Bangladesh">Bangladesh</option>
    <option value="0215Afghanistan">Afghanistan</option>
    <option value="0078Albania">Albania</option>
    <option value="0079Algeria">Algeria</option>
    <option value="0080Andorra">Andorra</option>
    <option value="0081Angola">Angola</option>
    <option value="0082Anguilla">Anguilla</option>
    <option value="0217Antarctica">Antarctica</option>
    <option value="0083Antigua and Barbuda">Antigua and Barbuda</option>
    <option value="0216American Samoa">American Samoa</option>
    <option value="0012Argentina">Argentina</option>
    <option value="0084Armenia">Armenia</option>
    <option value="0085Aruba">Aruba</option>
    <option value="0013Austria">Austria</option>
    <option value="0086Azerbaijan Republic">Azerbaijan Republic</option>
    <option value="0015Bahamas">Bahamas</option>
    <option value="0014Bahrain">Bahrain</option>
    <option value="0087Barbados">Barbados</option>
    <option value="0218Belarus">Belarus</option>
    <option value="0016Belgium">Belgium</option>
    <option value="0088Belize">Belize</option>
    <option value="0089Benin">Benin</option>
    <option value="0070Bermuda">Bermuda</option>
    <option value="0090Bhutan">Bhutan</option>
    <option value="0017Bolivia">Bolivia</option>
    <option value="0091Bosnia and Herzegowina">Bosnia and Herzegowina</option>
    <option value="0092Botswana">Botswana</option>
    <option value="0219Bouvet Island">Bouvet Island</option>
    <option value="0018Brazil">Brazil</option>
    <option value="0220British Indian Ocean Territory">British Indian Ocean Territory</option>
    <option value="0221British Virgin Islands">British Virgin Islands</option>
    <option value="0093Brunei">Brunei</option>
    <option value="0019Bulgaria">Bulgaria</option>
    <option value="0094Burkina Faso">Burkina Faso</option>
    <option value="0222Burma">Burma</option>
    <option value="0095Burundi">Burundi</option>
    <option value="0096Cambodia">Cambodia</option>
    <option value="0211Cameroon">Cameroon</option>
    <option value="0097Cape Verde">Cape Verde</option>
    <option value="0224Central African Republic">Central African Republic</option>
    <option value="0099Chad">Chad</option>
    <option value="0020Chile">Chile</option>
    <option value="0021China">China</option>
    <option value="0022Colombia">Colombia</option>
    <option value="0100Comoros">Comoros</option>
    <option value="0225Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
    <option value="0101Cook Islands">Cook Islands</option>
    <option value="0023Costa Rica">Costa Rica</option>
    <option value="0228Cote d'Ivoire">Cote d'Ivoire</option>
    <option value="0024Croatia">Croatia</option>
    <option value="0229Cuba">Cuba</option>
    <option value="0230Curacao">Curacao</option>
    <option value="0102Cyprus">Cyprus</option>
    <option value="0103Czech Republic">Czech Republic</option>
    <option value="0104Democratic Republic of the Congo">Democratic Republic of the Congo</option>
    <option value="0025Denmark">Denmark</option>
    <option value="0105Djibouti">Djibouti</option>
    <option value="0106Dominica">Dominica</option>
    <option value="0107Dominican Republic">Dominican Republic</option>
    <option value="0108Ecuador">Ecuador</option>
    <option value="0026Egypt">Egypt</option>
    <option value="0109El Salvador">El Salvador</option>
    <option value="0231Equatorial Guinea">Equatorial Guinea</option>
    <option value="0110Eritrea">Eritrea</option>
    <option value="0111Estonia">Estonia</option>
    <option value="0112Ethiopia">Ethiopia</option>
    <option value="0113Falkland Islands">Falkland Islands</option>
    <option value="0114Faroe Islands">Faroe Islands</option>
    <option value="0115Federated States of Micronesia">Federated States of Micronesia</option>
    <option value="0116Fiji">Fiji</option>
    <option value="0027Finland">Finland</option>
    <option value="0028France">France</option>
    <option value="0232France, Metropolitan">France, Metropolitan</option>
    <option value="0117French Guiana">French Guiana</option>
    <option value="1800French Polynesia">French Polynesia</option>
    <option value="0233French Southern and Antarctic Lands">French Southern and Antarctic Lands</option>
    <option value="0119Gabon Republic">Gabon Republic</option>
    <option value="0120Gambia">Gambia</option>
    <option value="0234Gaza Strip">Gaza Strip</option>
    <option value="0235Georgia">Georgia</option>
    <option value="0029Germany">Germany</option>
    <option value="0236Ghana">Ghana</option>
    <option value="0121Gibraltar">Gibraltar</option>
    <option value="0030Greece">Greece</option>
    <option value="0122Greenland">Greenland</option>
    <option value="0123Grenada">Grenada</option>
    <option value="0124Guadeloupe">Guadeloupe</option>
    <option value="0237Guam">Guam</option>
    <option value="0125Guatemala">Guatemala</option>
    <option value="0238Guernsey">Guernsey</option>
    <option value="0127Guinea">Guinea</option>
    <option value="0126Guinea Bissau">Guinea Bissau</option>
    <option value="0128Guyana">Guyana</option>
    <option value="0239Haiti">Haiti</option>
    <option value="0240Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
    <option value="0129Honduras">Honduras</option>
    <option value="0031Hong Kong">Hong Kong</option>
    <option value="0130Hungary">Hungary</option>
    <option value="0071Iceland">Iceland</option>
    <option value="0032Indonesia">Indonesia</option>
    <option value="0241Iran">Iran</option>
    <option value="0242Iraq">Iraq</option>
    <option value="0033Ireland">Ireland</option>
    <option value="0243Isle of Man">Isle of Man</option>
    <option value="0035Israel">Israel</option>
    <option value="0034Italy">Italy</option>
    <option value="0131Jamaica">Jamaica</option>
    <option value="0244Jersey">Jersey</option>
    <option value="0036Jordan">Jordan</option>
    <option value="0132Kazakhstan">Kazakhstan</option>
    <option value="0037Kenya">Kenya</option>
    <option value="0133Kiribati">Kiribati</option>
    <option value="0038Korea">Korea</option>
    <option value="0039Kuwait">Kuwait</option>
    <option value="0134Kyrgyzstan">Kyrgyzstan</option>
    <option value="0135Laos">Laos</option>
    <option value="0136Latvia">Latvia</option>
    <option value="0067Lebanon">Lebanon</option>
    <option value="0137Lesotho">Lesotho</option>
    <option value="0246Liberia">Liberia</option>
    <option value="0247Libya">Libya</option>
    <option value="0138Liechtenstein">Liechtenstein</option>
    <option value="0139Lithuania">Lithuania</option>
    <option value="0072Luxembourg">Luxembourg</option>
    <option value="0248Macau">Macau</option>
    <option value="0210Macedonia">Macedonia</option>
    <option value="0140Madagascar">Madagascar</option>
    <option value="0141Malawi">Malawi</option>
    <option value="0040Malaysia">Malaysia</option>
    <option value="0142Maldives">Maldives</option>
    <option value="0143Mali">Mali</option>
    <option value="0144Malta">Malta</option>
    <option value="0145Marshall Islands">Marshall Islands</option>
    <option value="0146Martinique">Martinique</option>
    <option value="0147Mauritania">Mauritania</option>
    <option value="0041Mauritius">Mauritius</option>
    <option value="0148Mayotte">Mayotte</option>
    <option value="0042Mexico">Mexico</option>
    <option value="0250Micronesia, Federated States of">Micronesia, Federated States of</option>
    <option value="0149Moldova">Moldova</option>
    <option value="0213Monaco">Monaco</option>
    <option value="0149Mongolia">Mongolia</option>
    <option value="0253Montenegro">Montenegro</option>
    <option value="0150Montserrat">Montserrat</option>
    <option value="0151Morocco">Morocco</option>
    <option value="0152Mozambique">Mozambique</option>
    <option value="0066Namibia">Namibia</option>
    <option value="0153Nauru">Nauru</option>
    <option value="0154Nepal">Nepal</option>
    <option value="0043Netherlands">Netherlands</option>
    <option value="0155Netherlands Antilles">Netherlands Antilles</option>
    <option value="0156New Caledonia">New Caledonia</option>
    <option value="0044New Zealand">New Zealand</option>
    <option value="0157Nicaragua">Nicaragua</option>
    <option value="0158Niger">Niger</option>
    <option value="0045Nigeria">Nigeria</option>
    <option value="0159Niue">Niue</option>
    <option value="0160Norfolk Island">Norfolk Island</option>
    <option value="0254Northern Mariana Islands">Northern Mariana Islands</option>
    <option value="0046Norway">Norway</option>
    <option value="0047Oman">Oman</option>
    <option value="0048Pakistan">Pakistan</option>
    <option value="0161Palau">Palau</option>
    <option value="0162Panama">Panama</option>
    <option value="0163Papua New Guinea">Papua New Guinea</option>
    <option value="0255Paraguay">Paraguay</option>
    <option value="0062Peru">Peru</option>
    <option value="0049Philippines">Philippines</option>
    <option value="0164Pitcairn Islands">Pitcairn Islands</option>
    <option value="0050Poland">Poland</option>
    <option value="0068Portugal">Portugal</option>
    <option value="0214Puerto Rico">Puerto Rico</option>
    <option value="0061Qatar">Qatar</option>
    <option value="0165Republic of the Congo">Republic of the Congo</option>
    <option value="0166Reunion">Reunion</option>
    <option value="0167Romania">Romania</option>
    <option value="0168Rwanda">Rwanda</option>
    <option value="0257Saint Barthelemy">Saint Barthelemy</option>
    <option value="0258Saint Helena, Ascension, and Tristan da Cunha">Saint Helena, Ascension, and Tristan da Cunha</option>
    <option value="0259Saint Kitts and Nevis">Saint Kitts and Nevis</option>
    <option value="0260Saint Lucia">Saint Lucia</option>
    <option value="0261Saint Martin">Saint Martin</option>
    <option value="0262Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
    <option value="0169Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
    <option value="0170Samoa">Samoa</option>
    <option value="0171San Marino">San Marino</option>
    <option value="0172Sao Tome and Principe">Sao Tome and Principe</option>
    <option value="0173Senegal">Senegal</option>
    <option value="0263Serbia">Serbia</option>
    <option value="0174Seychelles">Seychelles</option>
    <option value="0175Sierra Leone">Sierra Leone</option>
    <option value="0264Sint Maarten">Sint Maarten</option>
    <option value="0176Slovakia">Slovakia</option>
    <option value="0177Slovenia">Slovenia</option>
    <option value="0178Solomon Islands">Solomon Islands</option>
    <option value="0265South Georgia and the Islands">South Georgia and the Islands</option>
    <option value="0179Somalia">Somalia</option>
    <option value="0051South Africa">South Africa</option>
    <option value="0180South Korea">South Korea</option>
    <option value="0052Spain">Spain</option>
    <option value="0053Sri Lanka">Sri Lanka</option>
    <option value="0181St. Helena">St. Helena</option>
    <option value="0182St. Kitts and Nevis">St. Kitts and Nevis</option>
    <option value="0183St. Lucia">St. Lucia</option>
    <option value="0184St. Pierre and Miquelon">St. Pierre and Miquelon</option>
    <option value="0185Suriname">Suriname</option>
    <option value="0186Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
    <option value="0187Swaziland">Swaziland</option>
    <option value="0063Sweden">Sweden</option>
    <option value="0054Switzerland">Switzerland</option>
    <option value="0055Syria">Syria</option>
    <option value="0188Taiwan">Taiwan</option>
    <option value="0266Timor">Timor</option>
    <option value="0189Tajikistan">Tajikistan</option>
    <option value="0069Tanzania">Tanzania</option>
    <option value="0056Thailand">Thailand</option>
    <option value="0190Togo">Togo</option>
    <option value="0267Tokelau">Tokelau</option>
    <option value="0191Tonga">Tonga</option>
    <option value="0192Trinidad and Tobago">Trinidad and Tobago</option>
    <option value="0193Tunisia">Tunisia</option>
    <option value="0194Turkey">Turkey</option>
    <option value="0195Turkmenistan">Turkmenistan</option>
    <option value="0196Turks and Caicos Islands">Turks and Caicos Islands</option>
    <option value="0197Tuvalu">Tuvalu</option>
    <option value="0198Uganda">Uganda</option>
    <option value="0199Ukraine">Ukraine</option>
    <option value="0268United States Minor Outlying Islands">United States Minor Outlying Islands</option>
    <option value="0200Uruguay">Uruguay</option>
    <option value="0269Uzbekistan">Uzbekistan</option>
    <option value="0201Vanuatu">Vanuatu</option>
    <option value="0202Vatican City State">Vatican City State</option>
    <option value="0203Venezuela">Venezuela</option>
    <option value="0057Vietnam">Vietnam</option>
    <option value="0058Virgin Islands">Virgin Islands</option>
    <option value="0204Wallis and Futuna Islands">Wallis and Futuna Islands</option>
    <option value="0270West Bank">West Bank</option>
    <option value="0271Western Sahara">Western Sahara</option>
    <option value="0059Yemen">Yemen</option>
    <option value="0205Zambia">Zambia</option>
    <option value="0209Zimbabwe">Zimbabwe</option>
    <option value="0060others">OTHERS</option>
  </select><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input class="ui-autocomplete-input ui-combobox-input" autocomplete="off" menustatus="closed" placeholder="Select Country*"><button tabindex="-1" title="Show All Items" class="ui-button ui-widget ui-state-default ui-button-icon-only ui-corner-right ui-button-icon" role="button" aria-disabled="false"><span class="ui-button-icon-primary ui-icon ui-icon-triangle-1-s"></span><span class="ui-button-text">&nbsp;</span></button>
-->
  <textarea onfocus="if(this.value=='Description*'){ this.value=''; }" onblur="if(this.value==''){ this.value='Description*'; }" name="description" rows="3" class="form-input-text" cols="8" placeholder="Description*" style="height: 50px; padding-top: 5px;">Description*</textarea>
  <input type="submit" value="Submit" class="btnGreen" title="Submit">
  <input type="hidden" name="action_value" value="hform">
  <input type="hidden" name="currentpage_url" value="/">
  <input type="hidden" name="directory_name" value="">
</form>
        </div>