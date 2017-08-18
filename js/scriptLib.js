
// Shared UL Wrap for admin and Schools with multiple outputs on home default --------------------//
function HTMLWrap(listID, listHeader) {
    document.getElementById("beforeSwitch").innerHTML +=
        '<ul class="vertical menu primary" id="thisHere" data-accordion-menu><li class="grayBG">' +
        '<a href="#">' +  listHeader  + '</a>' +
        '<ul id="'+ listID  +'" class="vertical nested"></ul></li></ul></li></ul>';
}



// RETRIEVE SCHOOL LIBRARY ------------------------------------------------------------------------
/* Schools have two lists one for Principal the other a designated second contact, usually an AP */
function showSchoolLib(setPassed,listID,listHeader) {

    HTMLWrap(listID, listHeader);

    for (var property in setPassed) {        //console.log(property);

        for (key in setPassed[property])     // console.log(key);  console.log(setPassed[property].P_Contact);

            var fullString = '<li>' +
                '<span class="property">' + property + '</span>' +

                 //principal Output //
                '<span class="propValues">P:  <a  href="tel:' + setPassed[property].P_Phone + '"><img src="imgs/iconTel.png" alt="TEL" />' +
                setPassed[property].P_Contact + '</a>' +
                '<a class="iconSMS"  href="sms:' + setPassed[property].P_Phone + '"><img src="imgs/iconSMS.png" alt="SMS" /></a></span>' +

                //Secondary Contact  //
                '<span class="propValues">S: ' +
                '<a  href="tel:' + setPassed[property].SC_Phone + '"><img src="imgs/iconTel.png" alt="TEL" />' +
                setPassed[property].SC_Contact + '</a>' +
                '<a class="iconSMS" href="sms:' + setPassed[property].SC_Phone + '"><img src="imgs/iconSMS.png" alt="SMS" /></a></span></li>';

        document.getElementById(listID).innerHTML += fullString;
    }
}

// RETRIEVE ADMIN LIBRARY ---------------------------------------------------------------------------
/* Admins have one list set unlike Schools (P & S)  */
function showAdminLib(setPassed, listID) {

    HTMLWrap(listID,listID);

    for (var property2 in setPassed) {

        for (key2 in setPassed[property2])

            var fullString = '<li><span class="propValues">' +
                '<a href="tel:' + setPassed[property2].Phone + '">' +
                '<img src="imgs/iconTel.png" alt="TEL" />' +
                setPassed[property2].Name + '</a> ' +
                '<a class="iconSMS" href="sms:' + setPassed[property2].Phone + '">' +
                '<img src="imgs/iconSMS.png" alt="SMS" /></a>' +
                '</span></li>';

        document.getElementById(listID).innerHTML += fullString;
    }
}


// Call Library and set UL wrap as single rather than multiple //
function OneSet(showRequested) {
    document.getElementById("beforeSwitch").innerHTML = ('<ul id="singleSet" class="vertical menu primary" data-accordion-menu  style="background:#fff;"></ul>');
    showRequested();
}


// Call Libraries as needed for single or multiple outputs //
function ESData() {
    showSchoolLib(ESLibAM,"showESAM","Elementary A-M");
    showSchoolLib(ESLibNZ,"showESNZ","Elementary N-Z");
}

function MSData() {
    showSchoolLib(MSLib,"showMS","Middle School");
}

function HSData() {
    showSchoolLib(HSLib,"showHS","High School");
}

function BOEData() {
    showAdminLib(LeadershipLib,"Leadership");
    showAdminLib(MaintenanceLib,"Maintenance");
    showAdminLib(Transportation,"Transportation");
    showAdminLib(Registration,"Registration");
    showAdminLib(NutritionLib,"Nutrition");
    showAdminLib(Construction,"Construction");
    showAdminLib(NewHope,"NewHope");
    showAdminLib(GEMA,"GEMA");

}

function AramarkData() {
    showAdminLib(Aramark,"Aramark");
}


