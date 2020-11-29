<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
<body>
<h4> Search Criteria </h4>

<!-- Start of FORM -->

  <form class="form-horizontal" method="get" action="/drugevent">

  <div class="form-group">

    <label for="from_date" class="col-md-1 control-label" style="padding-top: 0px;">From Date:
    </label>

    <div class="col-md-5">
      <input type="date" class="form-control" name="from_date" id="from_date" value="2004-01-01">
    </div>

      <label for="to_date" class="col-md-1 control-label" style="padding-top: 0px;">To Date:
      </label>

    <div class="col-md-5">
       <input type="date" class="form-control" name="to_date" value="2020-11-25" id="to_date">
   </div>
   </div>
   <div class="form-group">
      <label for="from_age" class="col-md-3 control-label">From Age:</label>
   <div class="col-md-3">
   <input type="text" class="form-control" name="from_age" id="from_age" value="">
   </div>
   <label for="to_age" class="col-md-3 control-label">To Age:</label>
      <div class="col-md-3">
   <input id="to_age" type="text" class="form-control" name="to_age" value="">
   </div>
   </div>
   <div class="form-group">
      <label for="search" class="col-md-5 control-label">General Search: <br><small> (all fields)</small></label>
   <div class="col-md-7">
      <input id="search" type="text" class="form-control" name="search" value="">
   </div>
   </div>
   <div class="form-group">
      <label for="country" class="col-md-5 control-label">Country:</label>
      <div class="col-md-7">
         <select class="form-control" name="country" id="country">
            <option>GLOBALLY</option>
            <option>AFGHANISTAN</option>
            <option>ALAND ISLANDS</option>
            <option>ALBANIA</option>
            <option>ALGERIA</option>
            <option>AMERICAN SAMOA</option>
            <option>AN</option>
            <option>ANDORRA</option>
            <option>ANGOLA</option>
            <option>ANGUILLA</option>
            <option>ANTARCTICA</option>
            <option>ANTIGUA &amp; BARBUDA</option>
            <option>ANTIGUA AND BARBUDA</option>
            <option>ARGENTINA</option>
            <option>ARMENIA</option>
            <option>ARUBA</option>
            <option>AUSTRALIA</option>
            <option>AUSTRIA</option>
            <option>AZERBAIJAN</option>
            <option>BAHAMAS</option>
            <option>BAHRAIN</option>
            <option>BANGLADESH</option>
            <option>BARBADOS</option>
            <option>BELARUS</option>
            <option>BELGIUM</option>
            <option>BELIZE</option>
            <option>BENIN</option>
            <option>BERMUDA</option>
            <option>BHUTAN</option>
            <option>BOLIVIA</option>
            <option>BOSNIA &amp; HERZEGOVINA</option>
            <option>BOSNIA AND HERZEGOWINA</option>
            <option>BOTSWANA</option>
            <option>BOUVET ISLAND</option>
            <option>BRAZIL</option>
            <option>BRITAIN (UK)</option>
            <option>BRITISH INDIAN OCEAN TERRITORY</option>
            <option>BRUNEI</option>
            <option>BRUNEI DARUSSALAM</option>
            <option>BULGARIA</option>
            <option>BURKINA FASO</option>
            <option>BURUNDI</option>
            <option>CAMBODIA</option>
            <option>CAMEROON</option>
            <option>CANADA</option>
            <option>CAPE VERDE</option>
            <option>CARIBBEAN NL</option>
            <option>CAYMAN ISLANDS</option>
            <option>CENTRAL AFRICAN REP.</option>
            <option>CHAD</option>
            <option>CHILE</option>
            <option>CHINA</option>
            <option>CHRISTMAS ISLAND</option>
            <option>COCOS (KEELING) ISLANDS</option>
            <option>COLOMBIA</option>
            <option>COMOROS</option>
            <option>CONGO</option>
            <option>CONGO (DEM. REP.)</option>
            <option>CONGO (REP.)</option>
            <option>CONGO, THE DEMOCRATIC REPUBLIC OF THE</option>
            <option>COOK ISLANDS</option>
            <option>COSTA RICA</option>
            <option>COTE D'IVOIRE</option>
            <option>COUNTRY NOT SPECIFIED</option>
            <option>CROATIA</option>
            <option>CROATIA (local name: Hrvatska)</option>
            <option>CUBA</option>
            <option>CURACAO</option>
            <option>CURAÇAO</option>
            <option>CYPRUS</option>
            <option>CZECH REPUBLIC</option>
            <option>CÔTE D'IVOIRE</option>
            <option>DENMARK</option>
            <option>DJIBOUTI</option>
            <option>DOMINICA</option>
            <option>DOMINICAN REPUBLIC</option>
            <option>EAST TIMOR</option>
            <option>ECUADOR</option>
            <option>EGYPT</option>
            <option>EL SALVADOR</option>
            <option>EQUATORIAL GUINEA</option>
            <option>ERITREA</option>
            <option>ESTONIA</option>
            <option>ESWATINI (SWAZILAND)</option>
            <option>ETHIOPIA</option>
            <option>European Union</option>
            <option>FALKLAND ISLANDS</option>
            <option>FAROE ISLANDS</option>
            <option>FIJI</option>
            <option>FINLAND</option>
            <option>FRANCE</option>
            <option>FRANCE, METROPOLITAN</option>
            <option>FRENCH GUIANA</option>
            <option>FRENCH POLYNESIA</option>
            <option>FRENCH SOUTHERN &amp; ANTARCTIC LANDS</option>
            <option>FRENCH SOUTHERN TERRITORIES</option>
            <option>FX</option>
            <option>GABON</option>
            <option>GAMBIA</option>
            <option>GEORGIA</option>
            <option>GERMANY</option>
            <option>GHANA</option>
            <option>GIBRALTAR</option>
            <option>GREECE</option>
            <option>GREENLAND</option>
            <option>GRENADA</option>
            <option>GUADELOUPE</option>
            <option>GUAM</option>
            <option>GUATEMALA</option>
            <option>GUERNSEY</option>
            <option>GUINEA</option>
            <option>GUINEA-BISSAU</option>
            <option>GUYANA</option>
            <option>HAITI</option>
            <option>HEARD ISLAND &amp; MCDONALD ISLANDS</option>
            <option>HONDURAS</option>
            <option>HONG KONG</option>
            <option>HUNGARY</option>
            <option>ICELAND</option>
            <option>INDIA</option>
            <option>INDONESIA</option>
            <option>IRAN</option>
            <option>IRAN (ISLAMIC REPUBLIC OF)</option>
            <option>IRAQ</option>
            <option>IRELAND</option>
            <option>ISLE OF MAN</option>
            <option>ISRAEL</option>
            <option>ITALY</option>
            <option>JAMAICA</option>
            <option>JAPAN</option>
            <option>JERSEY</option>
            <option>JORDAN</option>
            <option>KAZAKHSTAN</option>
            <option>KENYA</option>
            <option>KIRIBATI</option>
            <option>KOREA (NORTH)</option>
            <option>KOREA (SOUTH)</option>
            <option>KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF</option>
            <option>KOREA, REPUBLIC OF</option>
            <option>KUWAIT</option>
            <option>KYRGYZSTAN</option>
            <option>LAO PEOPLE'S DEMOCRATIC REPUBLIC</option>
            <option>LAOS</option>
            <option>LATVIA</option>
            <option>LEBANON</option>
            <option>LESOTHO</option>
            <option>LIBERIA</option>
            <option>LIBYA</option>
            <option>LIBYAN ARAB JAMAHIRIYA</option>
            <option>LIECHTENSTEIN</option>
            <option>LITHUANIA</option>
            <option>LUXEMBOURG</option>
            <option>MACAU</option>
            <option>MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF</option>
            <option>MADAGASCAR</option>
            <option>MALAWI</option>
            <option>MALAYSIA</option>
            <option>MALDIVES</option>
            <option>MALI</option>
            <option>MALTA</option>
            <option>MARSHALL ISLANDS</option>
            <option>MARTINIQUE</option>
            <option>MAURITANIA</option>
            <option>MAURITIUS</option>
            <option>MAYOTTE</option>
            <option>MEXICO</option>
            <option>MICRONESIA</option>
            <option>MICRONESIA, FEDERATED STATES OF</option>
            <option>MOLDOVA</option>
            <option>MOLDOVA, REPUBLIC OF</option>
            <option>MONACO</option>
            <option>MONGOLIA</option>
            <option>MONTENEGRO</option>
            <option>MONTSERRAT</option>
            <option>MOROCCO</option>
            <option>MOZAMBIQUE</option>
            <option>MYANMAR</option>
            <option>MYANMAR (BURMA)</option>
            <option>NAMIBIA</option>
            <option>NAURU</option>
            <option>NEPAL</option>
            <option>NETHERLANDS</option>
            <option>NETHERLANDS ANTILLES</option>
            <option>NETHERLANDS ANTILLES (retired code)</option>
            <option>NEW CALEDONIA</option>
            <option>NEW ZEALAND</option>
            <option>NICARAGUA</option>
            <option>NIGER</option>
            <option>NIGERIA</option>
            <option>NIUE</option>
            <option>NORFOLK ISLAND</option>
            <option>NORTH MACEDONIA</option>
            <option>NORTHERN MARIANA ISLANDS</option>
            <option>NORWAY</option>
            <option>OMAN</option>
            <option>PAKISTAN</option>
            <option>PALAU</option>
            <option>PALESTINE</option>
            <option>PALESTINIAN TERRITORY, OCCUPIED</option>
            <option>PANAMA</option>
            <option>PAPUA NEW GUINEA</option>
            <option>PARAGUAY</option>
            <option>PERU</option>
            <option>PHILIPPINES</option>
            <option>PITCAIRN</option>
            <option>POLAND</option>
            <option>PORTUGAL</option>
            <option>PUERTO RICO</option>
            <option>QATAR</option>
            <option>QZ</option>
            <option>REUNION</option>
            <option>ROMANIA</option>
            <option>RUSSIA</option>
            <option>RUSSIAN FEDERATION</option>
            <option>RWANDA</option>
            <option>RÉUNION</option>
            <option>SAINT KITTS AND NEVIS</option>
            <option>SAMOA</option>
            <option>SAMOA (AMERICAN)</option>
            <option>SAMOA (WESTERN)</option>
            <option>SAN MARINO</option>
            <option>SAO TOME &amp; PRINCIPE</option>
            <option>SAUDI ARABIA</option>
            <option>SENEGAL</option>
            <option>SERBIA</option>
            <option>SERBIA AND MONTENEGRO</option>
            <option>SERBIA AND MONTENEGRO (see individual countries)</option>
            <option>SEYCHELLES</option>
            <option>SIERRA LEONE</option>
            <option>SINGAPORE</option>
            <option>SLOVAKIA</option>
            <option>SLOVAKIA (Slovak Republic)</option>
            <option>SLOVENIA</option>
            <option>SOLOMON ISLANDS</option>
            <option>SOMALIA</option>
            <option>SOUTH AFRICA</option>
            <option>SOUTH GEORGIA &amp; THE SOUTH SANDWICH ISLANDS</option>
            <option>SOUTH SUDAN</option>
            <option>SPAIN</option>
            <option>SRI LANKA</option>
            <option>ST BARTHELEMY</option>
            <option>ST HELENA</option>
            <option>ST KITTS &amp; NEVIS</option>
            <option>ST LUCIA</option>
            <option>ST MAARTEN (DUTCH)</option>
            <option>ST MARTIN (FRENCH)</option>
            <option>ST PIERRE &amp; MIQUELON</option>
            <option>ST VINCENT</option>
            <option>SUDAN</option>
            <option>SURINAME</option>
            <option>SVALBARD &amp; JAN MAYEN</option>
            <option>SVALBARD AND JAN MAYEN ISLANDS</option>
            <option>SWAZILAND</option>
            <option>SWEDEN</option>
            <option>SWITZERLAND</option>
            <option>SYRIA</option>
            <option>SYRIAN ARAB REPUBLIC</option>
            <option>TAIWAN</option>
            <option>TAIWAN, PROVINCE OF CHINA</option>
            <option>TAJIKISTAN</option>
            <option>TANZANIA</option>
            <option>TANZANIA, UNITED REPUBLIC OF</option>
            <option>THAILAND</option>
            <option>TOGO</option>
            <option>TOKELAU</option>
            <option>TONGA</option>
            <option>TP</option>
            <option>TRINIDAD &amp; TOBAGO</option>
            <option>TRINIDAD AND TOBAGO</option>
            <option>TUNISIA</option>
            <option>TURKEY</option>
            <option>TURKMENISTAN</option>
            <option>TURKS &amp; CAICOS IS</option>
            <option>TUVALU</option>
            <option>UGANDA</option>
            <option>UKRAINE</option>
            <option>UNITED ARAB EMIRATES</option>
            <option>UNITED KINGDOM</option>
            <option>UNITED STATES</option>
            <option>UNITED STATES MINOR OUTLYING ISLANDS</option>
            <option>URUGUAY</option>
            <option>UZBEKISTAN</option>
            <option>VANUATU</option>
            <option>VATICAN CITY</option>
            <option>VATICAN CITY STATE (HOLY SEE)</option>
            <option>VENEZUELA</option>
            <option>VIET NAM</option>
            <option>VIETNAM</option>
            <option>VIRGIN ISLANDS (UK)</option>
            <option>VIRGIN ISLANDS (US)</option>
            <option>WALLIS &amp; FUTUNA</option>
            <option>WALLIS AND FUTUNA ISLANDS</option>
            <option>WESTERN SAHARA</option>
            <option>YEMEN</option>
            <option>YUGOSLAVIA</option>
            <option>ZAIRE</option>
            <option>ZAMBIA</option>
            <option>ZIMBABWE</option>
            <option>ÅLAND ISLANDS</option>
         </select>
      </div>
   </div>
   <div class="form-group">
      <label for="patientsex" class="col-md-5 control-label">Patient Sex:</label>
   <div class="col-md-7">
      <select class="form-control" id="patientsex" name="patientsex">
         <option value=""> </option>
         <option value="1">Male</option>
         <option value="2">Female</option>
      </select>
   </div>
   </div>
   <div class="form-group">
   <label for="manufacturername" class="col-md-5 control-label">Manufacturer Name:</label>
   <div class="col-md-7">
   <input id="manufacturername" type="text" class="form-control" name="manufacturername" value="">
   </div>
   </div>
   <div class="form-group">
   <label for="drugbrandname" class="col-md-5 control-label">Brand Name: <br><small> (ex: tylenol)</small></label>
   <div class="col-md-7">
   <input type="text" class="form-control" id="drugbrandname" name="drugbrandname" value="">
   </div>
   </div>
   <div class="form-group">
   <label for="druggenericname" class="col-md-5 control-label">Generic Name: <br><small> (ex: acetaminophen)</small></label>
   <div class="col-md-7">
   <input type="text" class="form-control" id="druggenericname" name="druggenericname" value="">
   </div>
   </div>
   <div class="form-group">
   <label for="medicinalproduct" class="col-md-5 control-label">Medicinal Product: </label>
   <div class="col-md-7">
   <input type="text" class="form-control" id="medicinalproduct" name="medicinalproduct" value="">
   </div>
   </div>
   <div class="form-group">
   <label for="patient_reaction" class="col-md-5 control-label">Reaction: <br><small> (ex: nausea)</small></label>
   <div class="col-md-7">
   <input id="reactionmeddrapt" type="text" class="form-control" name="reactionmeddrapt" value="">
   </div>
   </div>
   <div class="form-group">
   <label class="col-md-5 control-label">Seriousness:</label>
   <div class="col-md-7">
   <div class="checkbox">
   <label>
   <input type="checkbox" name="seriousnessdeath" id="seriousnessdeath" value="1">Death
   </label>
   </div>
   <div class="checkbox">
   <label>
   <input type="checkbox" name="seriousnesshospitalization" id="seriousnesshospitalization" value="1">Hospitalization
   </label>
   </div>
   <div class="checkbox">
   <label>
   <input type="checkbox" name="seriousnesscongenitalanomali" id="seriousnesscongenitalanomali" value="1">Congenital Anomali
   </label>
   </div>
   <div class="checkbox">
   <label>
   <input type="checkbox" name="seriousnessdisabling" id="seriousnessdisabling" value="1">Disabling
   </label>
   </div>
   <div class="checkbox">
   <label>
   <input type="checkbox" name="seriousnesslifethreatening" id="seriousnesslifethreatening" value="1">Life Threatening
   </label>
   </div>
   </div>
   </div>
   <div class="form-group">
   <label for="drugclass" class="col-md-5 control-label">Pharmacologic Class:</label>
   <div class="col-md-7">
   <input type="text" class="form-control" id="drugclass" name="drugclass" value="">
   </div>
   </div>
   <div class="form-group">
   <label for="drugindication" class="col-md-5 control-label">Drug Indication: <br><small> (ex: hypertension)</small></label>
   <div class="col-md-7">
   <input type="text" id="drugindication" class="form-control" name="drugindication" value="">
   </div>
   </div>
   <div class="form-group">
   <label for="indsubmit" class="col-md-5 control-label">Individual Submitting:</label>
   <div class="col-md-7">
   <select class="form-control" id="indsubmit" name="indsubmit">
   <option value=""> </option>
   <option value="1">Physician</option>
   <option value="2">Pharmacist</option>
   <option value="3">Other health professional</option>
   <option value="4">Lawyer</option>
   <option value="5">Consumer or non-health professional</option>
   </select>
   </div>
   </div>
   <div class="form-group">
   <label for="productndc" class="col-md-5 control-label">Product NDC: <br><small> (ex: 62037-831)</small></label>
   <div class="col-md-7">
   <input type="text" id="productndc" class="form-control" name="productndc" value="">
   </div>
   </div>
   <div class="form-group">
   <label for="safetyreportid" class="col-md-5 control-label">Report ID: <br><small> (ex: 1234567-8)</small></label>
   <div class="col-md-7">
   <input type="text" class="form-control" id="safetyreportid" name="safetyreportid" value="">
   </div>
   </div>
   <p class="text-center"><em>To search for reports that match either of two or more terms add a + between your search words. Spaces between words act like an "AND" search when looking for two or more criteria. </em></p>
   <div class="form-group">
   <div class="col-md-7 pull-right">
   <button type="submit" class="btn btn-primary btn-lg pull-right">Search Adverse Event Reports </button>
   </div>
   </div>
   </form>
</body>
</html>
