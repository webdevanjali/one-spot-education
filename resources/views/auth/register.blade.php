<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Linking CSS files -->
    <link type="text/css" rel="stylesheet" href="{{ asset('Student Registration Form_files/css/form-common.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('Student Registration Form_files/css/5e6b428acc8c4e222d1beb91.css') }}">

    <!-- Linking JavaScript files -->
    <script src="{{ asset('Student Registration Form_files/js/prototype.forms.js') }}" type="text/javascript"></script>
    <script src="{{ asset('Student Registration Form_files/js/jotform.forms.js') }}" type="text/javascript"></script>

    <style type="text/css" id="form-designer-style">
        body {
            background-image: linear-gradient(#1e194c, #50498e);
            background-attachment: fixed;
        }
        .error {
            border: 3px solid red !important;
        }

        @media print {
            * {
                -webkit-print-color-adjust: exact !important;
                color-adjust: exact !important;
            }

            .form-section {
                display: inline !important
            }

            .form-pagebreak {
                display: none !important
            }

            .form-section-closed {
                height: auto !important
            }

            .page-section {
                position: initial !important
            }
        }

        /* Injected CSS Code */
        /*PREFERENCES STYLE*/
        .form-all {
            font-family: Inter, sans-serif;
        }

        .form-all .qq-upload-button,
        .form-all .form-submit-button,
        .form-all .form-submit-reset,
        .form-all .form-submit-print {
            font-family: Inter, sans-serif;
        }

        .form-all .form-pagebreak-back-container,
        .form-all .form-pagebreak-next-container {
            font-family: Inter, sans-serif;
        }

        .form-header-group {
            font-family: Inter, sans-serif;
        }

        .form-label {
            font-family: Inter, sans-serif;
        }

        .form-label.form-label-auto {

            display: block;
            float: none;
            text-align: left;
            width: 100%;

        }

        .form-line {
            margin-top: 10px 10px 10px 10px px;
            margin-bottom: 10px 10px 10px 10px px;
        }

        .form-all {
            max-width: 800px;
            width: 100%;
        }

        .form-label.form-label-left,
        .form-label.form-label-right,
        .form-label.form-label-left.form-label-auto,
        .form-label.form-label-right.form-label-auto {
            width: 230px;
        }

        .form-all {
            font-size: 16px
        }

        .form-all .qq-upload-button,
        .form-all .qq-upload-button,
        .form-all .form-submit-button,
        .form-all .form-submit-reset,
        .form-all .form-submit-print {
            font-size: 16px
        }

        .form-all .form-pagebreak-back-container,
        .form-all .form-pagebreak-next-container {
            font-size: 16px
        }

        .supernova .form-all,
        .form-all {
            background-color: #fff;
        }

        .form-all {
            color: #2C3345;
        }

        .form-header-group .form-header {
            color: #2C3345;
        }

        .form-header-group .form-subHeader {
            color: #2C3345;
        }

        .form-label-top,
        .form-label-left,
        .form-label-right,
        .form-html,
        .form-checkbox-item label,
        .form-radio-item label,
        span.FITB .qb-checkbox-label,
        span.FITB .qb-radiobox-label,
        span.FITB .form-radio label,
        span.FITB .form-checkbox label,
        [data-blotid][data-type=checkbox] [data-labelid],
        [data-blotid][data-type=radiobox] [data-labelid],
        span.FITB-inptCont[data-type=checkbox] label,
        span.FITB-inptCont[data-type=radiobox] label {
            color: #2C3345;
        }

        .form-sub-label {
            color: #464d5f;
        }

        .supernova {
            background-color: #ecedf3;
        }

        .supernova body {
            background: transparent;
        }

        .form-textbox,
        .form-textarea,
        .form-dropdown,
        .form-radio-other-input,
        .form-checkbox-other-input,
        .form-captcha input,
        .form-spinner input {
            background-color: #fff;
        }

        .supernova {
            background-image: none;
        }

        #stage {
            background-image: none;
        }

        .form-all {
            background-image: none;
        }

        .ie-8 .form-all:before {
            display: none;
        }

        .ie-8 {
            margin-top: auto;
            margin-top: initial;
        }

        /*PREFERENCES STYLE*/
        /*__INSPECT_SEPERATOR__*/
        .form-header-group.header-small {
            border: 0;
            border-top: 1px solid #ededf1;
        }

        li[data-type="control_image"] {
            margin-top: 40px;
        }

        .form-header-group.header-small h3 {
            text-transform: uppercase;
            font-size: 30px;
            font-weight: 300;
            text-align: left;
        }

        .form-header-group.header-small {
            padding: 20px 52px !important;
            border-radius: 6px 6px 0 0;
            border-top: 1px solid #eee;
            margin: 0 -38px;
        }

        .supernova {
            background-image: linear-gradient(#1e194c, #50498e);
            background-attachment: fixed;
        }

        .form-matrix-table tr:first-child th:first-child {
            border-bottom: 1px solid #c3cad8 !important;
        }

        /* Injected CSS Code */
    </style>

      <script type="text/javascript">	JotForm.newDefaultTheme = true;
        JotForm.extendsNewTheme = false;
        JotForm.singleProduct = false;
        JotForm.newPaymentUIForNewCreatedForms = false;
        JotForm.texts = { "confirmEmail": "E-mail does not match", "pleaseWait": "Please wait...", "validateEmail": "You need to validate this e-mail", "confirmClearForm": "Are you sure you want to clear the form", "lessThan": "Your score should be less than or equal to", "incompleteFields": "There are incomplete required fields. Please complete them.", "required": "This field is required.", "requireOne": "At least one field required.", "requireEveryRow": "Every row is required.", "requireEveryCell": "Every cell is required.", "email": "Enter a valid e-mail address", "alphabetic": "This field can only contain letters", "numeric": "This field can only contain numeric values", "alphanumeric": "This field can only contain letters and numbers.", "cyrillic": "This field can only contain cyrillic characters", "url": "This field can only contain a valid URL", "currency": "This field can only contain currency values.", "fillMask": "Field value must fill mask.", "uploadExtensions": "You can only upload following files:", "noUploadExtensions": "File has no extension file type (e.g. .txt, .png, .jpeg)", "uploadFilesize": "File size cannot be bigger than:", "uploadFilesizemin": "File size cannot be smaller than:", "gradingScoreError": "Score total should only be less than or equal to", "inputCarretErrorA": "Input should not be less than the minimum value:", "inputCarretErrorB": "Input should not be greater than the maximum value:", "maxDigitsError": "The maximum digits allowed is", "minCharactersError": "The number of characters should not be less than the minimum value:", "maxCharactersError": "The number of characters should not be more than the maximum value:", "freeEmailError": "Free email accounts are not allowed", "minSelectionsError": "The minimum required number of selections is ", "maxSelectionsError": "The maximum number of selections allowed is ", "pastDatesDisallowed": "Date must not be in the past.", "dateLimited": "This date is unavailable.", "dateInvalid": "This date is not valid. The date format is {format}", "dateInvalidSeparate": "This date is not valid. Enter a valid {element}.", "ageVerificationError": "You must be older than {minAge} years old to submit this form.", "multipleFileUploads_typeError": "{file} has invalid extension. Only {extensions} are allowed.", "multipleFileUploads_sizeError": "{file} is too large, maximum file size is {sizeLimit}.", "multipleFileUploads_minSizeError": "{file} is too small, minimum file size is {minSizeLimit}.", "multipleFileUploads_emptyError": "{file} is empty, please select files again without it.", "multipleFileUploads_uploadFailed": "File upload failed, please remove it and upload the file again.", "multipleFileUploads_onLeave": "The files are being uploaded, if you leave now the upload will be cancelled.", "multipleFileUploads_fileLimitError": "Only {fileLimit} file uploads allowed.", "dragAndDropFilesHere_infoMessage": "Drag and drop files here", "chooseAFile_infoMessage": "Choose a file", "maxFileSize_infoMessage": "Max. file size", "generalError": "There are errors on the form. Please fix them before continuing.", "generalPageError": "There are errors on this page. Please fix them before continuing.", "wordLimitError": "Too many words. The limit is", "wordMinLimitError": "Too few words.  The minimum is", "characterLimitError": "Too many Characters.  The limit is", "characterMinLimitError": "Too few characters. The minimum is", "ccInvalidNumber": "Credit Card Number is invalid.", "ccInvalidCVC": "CVC number is invalid.", "ccInvalidExpireDate": "Expire date is invalid.", "ccInvalidExpireMonth": "Expiration month is invalid.", "ccInvalidExpireYear": "Expiration year is invalid.", "ccMissingDetails": "Please fill up the credit card details.", "ccMissingProduct": "Please select at least one product.", "ccMissingDonation": "Please enter numeric values for donation amount.", "disallowDecimals": "Please enter a whole number.", "restrictedDomain": "This domain is not allowed", "ccDonationMinLimitError": "Minimum amount is {minAmount} {currency}", "requiredLegend": "All fields marked with * are required and must be filled.", "geoPermissionTitle": "Permission Denied", "geoPermissionDesc": "Check your browser's privacy settings.", "geoNotAvailableTitle": "Position Unavailable", "geoNotAvailableDesc": "Location provider not available. Please enter the address manually.", "geoTimeoutTitle": "Timeout", "geoTimeoutDesc": "Please check your internet connection and try again.", "selectedTime": "Selected Time", "formerSelectedTime": "Former Time", "cancelAppointment": "Cancel Appointment", "cancelSelection": "Cancel Selection", "noSlotsAvailable": "No slots available", "slotUnavailable": "{time} on {date} has been selected is unavailable. Please select another slot.", "multipleError": "There are {count} errors on this page. Please correct them before moving on.", "oneError": "There is {count} error on this page. Please correct it before moving on.", "doneMessage": "Well done! All errors are fixed.", "invalidTime": "Enter a valid time", "doneButton": "Done", "reviewSubmitText": "Review and Submit", "nextButtonText": "Next", "prevButtonText": "Previous", "seeErrorsButton": "See Errors", "notEnoughStock": "Not enough stock for the current selection", "notEnoughStock_remainedItems": "Not enough stock for the current selection ({count} items left)", "soldOut": "Sold Out", "justSoldOut": "Just Sold Out", "selectionSoldOut": "Selection Sold Out", "subProductItemsLeft": "({count} items left)", "startButtonText": "START", "submitButtonText": "Submit", "submissionLimit": "Sorry! Only one entry is allowed. <br> Multiple submissions are disabled for this form.", "reviewBackText": "Back to Form", "seeAllText": "See All", "progressMiddleText": "of", "fieldError": "field has an error.", "error": "Error" };
        JotForm.newPaymentUI = true;
        JotForm.originalLanguage = "en";
        JotForm.replaceTagTest = true;
    
        JotForm.setConditions([{ "action": [{ "id": "action_1671522275361", "visibility": "Show", "isError": false, "field": "55" }], "id": "1671522289247", "index": "0", "link": "Any", "priority": "0", "terms": [{ "id": "term_1671522275361", "field": "54", "operator": "equals", "value": "Yes", "isError": false }], "type": "field" }, { "action": [{ "id": "action_1671522248911", "visibility": "Show", "isError": false, "field": "51" }], "id": "1671522270827", "index": "1", "link": "Any", "priority": "1", "terms": [{ "id": "term_1671522248911", "field": "50", "operator": "equals", "value": "Yes", "isError": false }], "type": "field" }, { "action": [{ "field": "38", "visibility": "Hide" }], "id": "1671521947009", "index": "2", "link": "Any", "priority": "2", "terms": [{ "field": "59", "operator": "equals", "value": "MS in Physics" }], "type": "field" }, { "action": [{ "field": "24", "visibility": "Hide" }], "id": "1671521947010", "index": "3", "link": "Any", "priority": "3", "terms": [{ "field": "59", "operator": "equals", "value": "MS in Physics" }], "type": "field" }]); JotForm.submitError = "jumpToFirstError";
        
        JotForm.init(function () {
          /*INIT-START*/
          if (window.JotForm && JotForm.accessible) $('input_9').setAttribute('tabindex', 0);
          JotForm.setPhoneMaskingValidator('input_61_full', '\u0028\u0023\u0023\u0023\u0029 \u0023\u0023\u0023\u002d\u0023\u0023\u0023\u0023');
          if (window.JotForm && JotForm.accessible) $('input_46').setAttribute('tabindex', 0);
          JotForm.setPhoneMaskingValidator('input_64_full', '\u0028\u0023\u0023\u0023\u0029 \u0023\u0023\u0023\u002d\u0023\u0023\u0023\u0023');
          if (window.JotForm && JotForm.accessible) $('input_38').setAttribute('tabindex', 0);
          JotForm.description('input_18', 'Include all affiliations, leadership positions, awards received (and award giving body), work experience during your entire high school to college.');
          if (window.JotForm && JotForm.accessible) $('input_57').setAttribute('tabindex', 0);
          if (window.JotForm && JotForm.accessible) $('input_69').setAttribute('tabindex', 0);
          if (window.JotForm && JotForm.accessible) $('input_51').setAttribute('tabindex', 0);
          if (window.JotForm && JotForm.accessible) $('input_55').setAttribute('tabindex', 0);
          if (window.JotForm && JotForm.accessible) $('input_52').setAttribute('tabindex', 0);
          if (window.JotForm && JotForm.accessible) $('input_48').setAttribute('tabindex', 0);
          JotForm.alterTexts({ "confirmClearForm": "Are you sure you want to clear the form", "lessThan": "Your score should be less than" });
          setTimeout(function () {
            JotForm.initMultipleUploads();
          }, 2);
          /*INIT-END*/
        });
    
        setTimeout(function () {
          JotForm.paymentExtrasOnTheFly([null, { "name": "studentRegistration", "qid": "1", "text": "Student Registration Form", "type": "control_head" }, null, null, { "name": "fullName", "qid": "4", "text": "Full Name", "type": "control_fullname" }, null, null, { "name": "clickTo7", "qid": "7", "text": "Basic Information", "type": "control_collapse" }, { "name": "yearLevel8", "qid": "8", "subLabel": "for Incoming A.Y. '12-'13", "text": "Year Level", "type": "control_dropdown" }, { "name": "studentNumber9", "qid": "9", "subLabel": "e.g. 11183021", "text": "Student Number", "type": "control_textbox" }, { "name": "email", "qid": "10", "text": "Email", "type": "control_email" }, null, null, null, null, { "name": "birthDate", "qid": "15", "text": "Birth Date", "type": "control_birthdate" }, null, null, { "description": "Include all affiliations, leadership positions, awards received (and award giving body), work experience during your entire high school to college.", "name": "curriculumVitae", "qid": "18", "subLabel": "File should be in pdf, doc\u002Fdocx format.", "text": "Curriculum Vitae or List of Achievements", "type": "control_fileupload" }, null, null, null, null, null, { "name": "clickTo24", "qid": "24", "text": "Other Details", "type": "control_collapse" }, { "name": "skillstalents", "qid": "25", "text": "Skills\u002FTalents", "type": "control_checkbox" }, { "name": "extraCurricular", "qid": "26", "text": "Extra Curricular Participation", "type": "control_checkbox" }, null, { "name": "sports", "qid": "28", "text": "Sports", "type": "control_checkbox" }, null, null, null, { "name": "submit", "qid": "32", "text": "Submit", "type": "control_button" }, null, null, null, { "name": "id36", "qid": "36", "text": "ID", "type": "control_autoincrement" }, null, { "name": "highSchool", "qid": "38", "text": "High School Name", "type": "control_textbox" }, null, null, null, null, null, { "name": "presentAddress44", "qid": "44", "text": "Present Address", "type": "control_address" }, { "name": "permanentAddress45", "qid": "45", "text": "Permanent Address", "type": "control_address" }, { "name": "relationship46", "qid": "46", "subLabel": "ex. Father, Mother, etc.", "text": "Relationship", "type": "control_textbox" }, { "name": "networkProvider47", "qid": "47", "text": "Network Provider", "type": "control_dropdown" }, { "mde": "No", "name": "suggestions48", "qid": "48", "text": "Suggestions \u002F Comments", "type": "control_textarea", "wysiwyg": "Disable" }, { "name": "estimateYour", "qid": "49", "text": "Estimate Your Family Monthly Income", "type": "control_dropdown" }, { "name": "doYou", "qid": "50", "text": "Do You Have Any Scholarship?", "type": "control_radio" }, { "name": "whowhatIs", "qid": "51", "text": "Who\u002Fwhat is the name of your sponsor?", "type": "control_textbox" }, { "name": "whatCourse", "qid": "52", "text": "What Course Is Your First Choice In The University?", "type": "control_textbox" }, { "name": "whatIs53", "qid": "53", "text": "What Is Your Plan After College?", "type": "control_dropdown" }, { "name": "doYou54", "qid": "54", "text": "Do You Plan To Shift To Another Course?", "type": "control_radio" }, { "name": "ifYes55", "qid": "55", "text": "To What Course?", "type": "control_textbox" }, { "name": "resourcesAvailable56", "qid": "56", "text": "Resources Available", "type": "control_checkbox" }, { "name": "otherExtra", "qid": "57", "text": "Other Extra Curricular Activities", "type": "control_textbox" }, null, { "name": "degreeProgram", "qid": "59", "text": "Degree Program", "type": "control_dropdown" }, { "name": "clickTo60", "qid": "60", "text": "Academic Background", "type": "control_collapse" }, { "name": "phoneNumber", "qid": "61", "text": "Phone Number", "type": "control_phone" }, { "name": "personTo62", "qid": "62", "text": "Emergency Contact", "type": "control_fullname" }, { "name": "addressOf63", "qid": "63", "text": "Address Of Person To Contact In Case Of Emergency", "type": "control_address" }, { "name": "contactDetails64", "qid": "64", "text": "Phone Number Of Person To Contact In Case Of Emergency", "type": "control_phone" }, { "name": "pleaseVerify", "qid": "65", "text": "Please verify that you are human", "type": "control_captcha" }, { "name": "asset2068402x639c70926ea1a995874275", "qid": "66", "text": "Asset%2068%402x.639c70926ea1a9.95874275", "type": "control_image" }, { "name": "input67", "qid": "67", "text": "\nACME CITY COLLEGE\n123 Maple Street, Houston, TX, 77002\n\nexample@example.com\nwww.example.com\n(123) 1234567\n\n", "type": "control_text" }, { "name": "emailOf", "qid": "68", "subLabel": "example@example.com", "text": "Email Of Person To Contact In Case Of Emergency", "type": "control_email" }, { "mde": "No", "name": "interests", "qid": "69", "text": "Interests", "type": "control_textarea", "wysiwyg": "Disable" }]);
        }, 20); 
      </script>




</head>

<body>
<!-- <form id="studentRegistrationForm">
        <label for="name">Name:</label>
        <input required type="text" id="name" name="name" required>
        <button type="submit">Submit</button>
    </form> -->
    <form id="studentRegistrationForm" class="jotform-form" method="POST" action="{{ url('register') }}">
        @csrf
        <div role="main" class="form-all">
            <ul class="form-section page-section">
                <li class="form-line form-line-column form-col-1" data-type="control_image" id="id_66"
                    data-css-selector="id_66">
                    <div id="cid_66" class="form-input-wide" data-layout="full"> <img alt="Image-66" loading="lazy"
                            class="form-image" style="border:0"
                            src="Student%20Registration%20Form_files/Asset%2068@2x.639c70926ea1a9.95874275.png"
                            height="50px" width="230px" data-component="image" role="none" aria-hidden="true"
                            tabindex="-1"> </div>
                </li>
                <li class="form-line form-line-column form-col-2" data-type="control_text" id="id_67"
                    data-css-selector="id_67">
                    <div id="cid_67" class="form-input-wide" data-layout="full">
                        <div id="text_67" class="form-html" data-component="text" tabindex="0">
                            <div style="line-height:18px;text-align:right;padding-top:24px;">
                                <div style="font-size:12pt;"><strong>ONE&nbsp; SPOT &nbsp; EDUCATION &nbsp; CAMPUS</strong></div>
                                <div style="font-size:10pt;">123 Street, Rajmarg, Delhi-110096, India</div>
                                <div style="line-height:14px;">
                                    <div style="font-size:8pt;">onespoteducation@example.com</div>
                                    <div style="font-size:8pt;">www.onespoteducation.com</div>
                                    <div style="font-size:8pt;">(91) 1234567890</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li id="cid_1" class="form-input-wide" data-type="control_head" data-css-selector="id_1">
                    <div class="form-header-group  header-small">
                        <div class="header-text httac htvam">
                            <h3 id="header_1" class="form-header" data-component="header">Student Registration Form</h3LOGO.com>
                        </div>
                    </div>
                </li>
                <ul class="form-section-closed" id="section_7" style="overflow: hidden; height: 84px;">
                    <li id="cid_7" class="form-input-wide" data-type="control_collapse" data-css-selector="id_7">
                        <div class="form-collapse-table" id="collapse_7" data-component="collapse" role="button"
                            tabindex="0" aria-pressed="false"><span class="form-collapse-mid" id="collapse-text_7">Basic
                                Information</span><span
                                class="form-collapse-right form-collapse-right-show">&nbsp;</span></div>
                    </li>
                    <li class="form-line" id="id_4" >
                        <label class="form-label form-label-top form-label-extended form-label-auto">Full Name</label>
                        <div class="form-input-wide" >
                            <div data-wrapper-react="true" class="extended">
                                <span class="form-sub-label-container">
                                    <input required  type="text" id="first_4" name="" class="form-textbox" size="10" >
                                    <label class="form-sub-label" for="first_4" >First Name</label>
                                </span>
                                <span class="form-sub-label-container"  >
                                    <input required  type="text" id="middle_4" name="" class="form-textbox" >
                                    <label class="form-sub-label" for="middle_4">Middle Name</label>
                                </span>
                                <span class="form-sub-label-container">
                                    <input required  type="text" id="last_4" name="" class="form-textbox" >
                                    <label class="form-sub-label" for="last_4">Last Name</label>
                                </span>
                            </div>
                        </div>
                    </li>
                    
                    <li class="form-line form-line-column form-col-1">
                        <label class="form-label form-label-top" for="input_9">Student Number</label>
                        <div class="form-input-wide">
                            <span class="form-sub-label-container" >
                                <input required  type="text" id="input_9" name="studentNumber" class="form-textbox"> 
                                <label class="form-sub-label" for="input_9">e.g. 11183021</label>
                            </span>
                        </div>
                    </li>
                    
                    <li class="form-line form-line-column form-col-3">
                        <label class="form-label form-label-top form-label-auto" for="input_59">Degree Program</label>
                        <div class="form-input-wide">
                            <select required class="form-dropdown" id="input_59" name="q59_degreeProgram">
                                <option value="" selected>Please Select</option>
                                <option value="BS in Pre-Med Physics">BS in Pre-Med Physics</option>
                            </select>
                        </div>
                    </li>
                    
                    
                    <li class="form-line form-line-column form-col-4">
                        <label class="form-label form-label-top form-label-auto" for="input_10">Email</label>
                        <div class="form-input-wide">
                            <input required  type="email" id="input_10" name="q10_email" class="form-textbox" placeholder="ex: myname@example.com">
                        </div>
                    </li>
                    
                    <li class="form-line form-line-column form-col-5">
                        <label class="form-label form-label-top form-label-auto" for="input_61_full">Phone Number</label>
                        <div class="form-input-wide">
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input required  type="tel" id="input_61_full" name="q61_phoneNumber[full]" class="form-textbox" placeholder="(000) 000-0000">
                            </span>
                        </div>
                    </li>
                    
                    <li class="form-line">
                        <label class="form-label form-label-top form-label-auto">
                            Birth Date
                        </label>
                        <div class="form-input-wide">
                            <div data-wrapper-react="true">
                                <span class="form-sub-label-container" >
                                    <select required name="q15_birthDate[month]" id="input_15_month" class="form-dropdown">
                                        <option value="" selected="selected">Please select a month</option>
                                        <option value="1">January</option>
                                        <option value="2">February</option>
                                    </select>
                                    <label class="form-sub-label" for="input_15_month">Month</label>
                                </span>
                                <span class="form-sub-label-container" style="vertical-align:top">
                                    <select required name="q15_birthDate[day]" id="input_15_day" class="form-dropdown" data-component="birthdate-day" aria-labelledby="label_15 sublabel_15_day">
                                        <option value="" selected="selected">Please select a day</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <label class="form-sub-label" for="input_15_day" id="sublabel_15_day" style="min-height:13px">Day</label>
                                </span>
                                <span class="form-sub-label-container" style="vertical-align:top">
                                    <select required name="q15_birthDate[year]" id="input_15_year" class="form-dropdown" data-component="birthdate-year" aria-labelledby="label_15 sublabel_15_year">
                                        <option value="" selected="selected">Please select a year</option>
                                        <option value="2024">2024</option>
                                        <option value="2023">2023</option>
                                        <option value="2022">2022</option>
                                    </select>
                                    <label class="form-sub-label" for="input_15_year" id="sublabel_15_year" style="min-height:13px">Year</label>
                                </span>
                            </div>
                        </div>
                    </li>
                    
                    </li>  <li class="form-line" data-type="control_address" id="id_44" data-css-selector="id_44"><label
                        class="form-label form-label-top form-label-auto" id="label_44" for="input_44_addr_line1"
                        aria-hidden="false"> Present Address </label>
                    <div id="cid_44" class="form-input-wide" data-layout="full">
                        <div summary="" class="form-address-table jsTest-addressField">
                            <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                    class="form-address-line form-address-street-line jsTest-address-lineField"><span
                                        class="form-sub-label-container" style="vertical-align:top"><input required
                                            type="text" id="input_44_addr_line1"
                                            name="q44_presentAddress44[addr_line1]"
                                            class="form-textbox form-address-line" data-defaultvalue=""
                                            autocomplete="section-input_44 address-line1"
                                            data-component="address_line_1"
                                            aria-labelledby="label_44 sublabel_44_addr_line1" maxlength="100"><label
                                            class="form-sub-label" for="input_44_addr_line1"
                                            id="sublabel_44_addr_line1" style="min-height:13px">Street
                                            Address</label></span></span></div>
                            <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                    class="form-address-line form-address-street-line jsTest-address-lineField"><span
                                        class="form-sub-label-container" style="vertical-align:top"><input required
                                            type="text" id="input_44_addr_line2"
                                            name="q44_presentAddress44[addr_line2]"
                                            class="form-textbox form-address-line" data-defaultvalue=""
                                            autocomplete="section-input_44 address-line2"
                                            data-component="address_line_2"
                                            aria-labelledby="label_44 sublabel_44_addr_line2" maxlength="100"><label
                                            class="form-sub-label" for="input_44_addr_line2"
                                            id="sublabel_44_addr_line2" style="min-height:13px">Street Address
                                            Line 2</label></span></span></div>
                            <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                    class="form-address-line form-address-city-line jsTest-address-lineField "><span
                                        class="form-sub-label-container" style="vertical-align:top"><input required
                                            type="text" id="input_44_city" name="q44_presentAddress44[city]"
                                            class="form-textbox form-address-city" data-defaultvalue=""
                                            autocomplete="section-input_44 address-level2" data-component="city"
                                            aria-labelledby="label_44 sublabel_44_city" maxlength="60"><label
                                            class="form-sub-label" for="input_44_city" id="sublabel_44_city"
                                            style="min-height:13px">City</label></span></span><span
                                    class="form-address-line form-address-state-line jsTest-address-lineField "><span
                                        class="form-sub-label-container" style="vertical-align:top"><input required
                                            type="text" id="input_44_state" name="q44_presentAddress44[state]"
                                            class="form-textbox form-address-state" data-defaultvalue=""
                                            autocomplete="section-input_44 address-level1" data-component="state"
                                            aria-labelledby="label_44 sublabel_44_state" maxlength="60"><label
                                            class="form-sub-label" for="input_44_state" id="sublabel_44_state"
                                            style="min-height:13px">State /
                                            Province</label></span></span></div>
                            <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                    class="form-address-line form-address-zip-line jsTest-address-lineField "><span
                                        class="form-sub-label-container" style="vertical-align:top"><input required
                                            type="text" id="input_44_postal" name="q44_presentAddress44[postal]"
                                            class="form-textbox form-address-postal" data-defaultvalue=""
                                            autocomplete="section-input_44 postal-code" data-component="zip"
                                            aria-labelledby="label_44 sublabel_44_postal" maxlength="20"><label
                                            class="form-sub-label" for="input_44_postal" id="sublabel_44_postal"
                                            style="min-height:13px">Postal / Zip
                                            Code</label></span></span><span
                                    class="form-address-line form-address-country-line jsTest-address-lineField "><span
                                        class="form-sub-label-container" style="vertical-align:top"><select
                                            class="form-dropdown form-address-country is-active"
                                            name="q44_presentAddress44[country]" id="input_44_country"
                                            data-component="country" required=""
                                            aria-labelledby="label_44 sublabel_44_country"
                                            autocomplete="section-input_44 country">
                                            <option value="">Please Select</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="other">Other</option>
                                        </select><label class="form-sub-label" for="input_44_country"
                                            id="sublabel_44_country"
                                            style="min-height:13px">Country</label></span></span></div>
                        </div>
                    </div>
                    </li>
                    <li class="form-line" data-type="control_address" id="id_45" data-css-selector="id_45"><label
                            class="form-label form-label-top form-label-auto" id="label_45" for="input_45_addr_line1"
                            aria-hidden="false"> Permanent Address </label>
                        <div id="cid_45" class="form-input-wide" data-layout="full">
                            <div summary="" class="form-address-table jsTest-addressField">
                                <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                        class="form-address-line form-address-street-line jsTest-address-lineField"><span
                                            class="form-sub-label-container" style="vertical-align:top"><input required
                                                type="text" id="input_45_addr_line1"
                                                name="q45_permanentAddress45[addr_line1]"
                                                class="form-textbox form-address-line" data-defaultvalue=""
                                                autocomplete="section-input_45 address-line1"
                                                data-component="address_line_1"
                                                aria-labelledby="label_45 sublabel_45_addr_line1" maxlength="100"><label
                                                class="form-sub-label" for="input_45_addr_line1"
                                                id="sublabel_45_addr_line1" style="min-height:13px">Street
                                                Address</label></span></span></div>
                                <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                        class="form-address-line form-address-street-line jsTest-address-lineField"><span
                                            class="form-sub-label-container" style="vertical-align:top"><input required
                                                type="text" id="input_45_addr_line2"
                                                name="q45_permanentAddress45[addr_line2]"
                                                class="form-textbox form-address-line" data-defaultvalue=""
                                                autocomplete="section-input_45 address-line2"
                                                data-component="address_line_2"
                                                aria-labelledby="label_45 sublabel_45_addr_line2" maxlength="100"><label
                                                class="form-sub-label" for="input_45_addr_line2"
                                                id="sublabel_45_addr_line2" style="min-height:13px">Street Address
                                                Line 2</label></span></span></div>
                                <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                        class="form-address-line form-address-city-line jsTest-address-lineField "><span
                                            class="form-sub-label-container" style="vertical-align:top"><input required
                                                type="text" id="input_45_city" name="q45_permanentAddress45[city]"
                                                class="form-textbox form-address-city" data-defaultvalue=""
                                                autocomplete="section-input_45 address-level2" data-component="city"
                                                aria-labelledby="label_45 sublabel_45_city" maxlength="60"><label
                                                class="form-sub-label" for="input_45_city" id="sublabel_45_city"
                                                style="min-height:13px">City</label></span></span><span
                                        class="form-address-line form-address-state-line jsTest-address-lineField "><span
                                            class="form-sub-label-container" style="vertical-align:top"><input required
                                                type="text" id="input_45_state" name="q45_permanentAddress45[state]"
                                                class="form-textbox form-address-state" data-defaultvalue=""
                                                autocomplete="section-input_45 address-level1" data-component="state"
                                                aria-labelledby="label_45 sublabel_45_state" maxlength="60"><label
                                                class="form-sub-label" for="input_45_state" id="sublabel_45_state"
                                                style="min-height:13px">State /
                                                Province</label></span></span></div>
                                <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                        class="form-address-line form-address-zip-line jsTest-address-lineField "><span
                                            class="form-sub-label-container" style="vertical-align:top"><input required
                                                type="text" id="input_45_postal" name="q45_permanentAddress45[postal]"
                                                class="form-textbox form-address-postal" data-defaultvalue=""
                                                autocomplete="section-input_45 postal-code" data-component="zip"
                                                aria-labelledby="label_45 sublabel_45_postal" maxlength="20"><label
                                                class="form-sub-label" for="input_45_postal" id="sublabel_45_postal"
                                                style="min-height:13px">Postal / Zip
                                                Code</label></span></span><span
                                        class="form-address-line form-address-country-line jsTest-address-lineField "><span
                                            class="form-sub-label-container" style="vertical-align:top"><select
                                                class="form-dropdown form-address-country is-active"
                                                name="q45_permanentAddress45[country]" id="input_45_country"
                                                data-component="country" required=""
                                                aria-labelledby="label_45 sublabel_45_country"
                                                autocomplete="section-input_45 country">
                                                <option value="">Please Select</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="other">Other</option>
                                            </select><label class="form-sub-label" for="input_45_country"
                                                id="sublabel_45_country"
                                                style="min-height:13px">Country</label></span></span></div>
                            </div>
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-1" data-type="control_fullname" id="id_62"
                        data-css-selector="id_62"><label class="form-label form-label-top form-label-auto" id="label_62"
                            for="first_62" aria-hidden="false"> Emergency Contact </label>
                        <div id="cid_62" class="form-input-wide" data-layout="full">
                            <div data-wrapper-react="true"><span class="form-sub-label-container"
                                    style="vertical-align:top" data-input-type="first"><input required  type="text" id="first_62"
                                        name="q62_personTo62[first]" class="form-textbox" data-defaultvalue=""
                                        autocomplete="section-input_62 given-name" size="10" data-component="first"
                                        aria-labelledby="label_62 sublabel_62_first"><label class="form-sub-label"
                                        for="first_62" id="sublabel_62_first" style="min-height:13px">First
                                        Name</label></span><span class="form-sub-label-container"
                                    style="vertical-align:top" data-input-type="last"><input required  type="text" id="last_62"
                                        name="q62_personTo62[last]" class="form-textbox" data-defaultvalue=""
                                        autocomplete="section-input_62 family-name" size="15" data-component="last"
                                        aria-labelledby="label_62 sublabel_62_last"><label class="form-sub-label"
                                        for="last_62" id="sublabel_62_last" style="min-height:13px">Last
                                        Name</label></span></div>
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_46"
                        data-css-selector="id_46"><label class="form-label form-label-top" id="label_46" for="input_46"
                            aria-hidden="false"> Relationship </label>
                        <div id="cid_46" class="form-input-wide" data-layout="half"> <span
                                class="form-sub-label-container" style="vertical-align:top"><input required  type="text"
                                    id="input_46" name="q46_relationship46" data-type="input-textbox"
                                    class="form-textbox" data-defaultvalue="" style="width:310px" size="310"
                                    maxlength="100" placeholder=" " data-component="textbox"
                                    aria-labelledby="label_46 sublabel_input_46"><label class="form-sub-label"
                                    for="input_46" id="sublabel_input_46" style="min-height:13px">ex. Father, Mother,
                                    etc.</label></span> </div>
                    </li>

                    <li class="form-line form-line-column form-col-4">
                        <label class="form-label form-label-top form-label-auto" for="password">Create a Password for your account</label>
                        <div class="form-input-wide">
                            <input required  type="password" id="password" name="upass" class="form-textbox" placeholder="Create a strong password using combination of letters, numbers and a special character">
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-4">
                        <label class="form-label form-label-top form-label-auto" for="cpassword">Confirm Account Password</label>
                        <div class="form-input-wide">
                            <input required  type="password" id="cpassword" name="cupass" class="form-textbox" placeholder="Confirm password by typing it once again">
                        </div>
                    </li>

                </ul>
                <ul class="form-section-closed" id="section_60" style="overflow: hidden; height: 84px;">
                    <li id="cid_60" class="form-input-wide" data-type="control_collapse" data-css-selector="id_60">
                        <div class="form-collapse-table" id="collapse_60" data-component="collapse" role="button"
                            tabindex="0" aria-pressed="false"><span class="form-collapse-mid"
                                id="collapse-text_60">Academic Background</span><span
                                class="form-collapse-right form-collapse-right-show">&nbsp;</span></div>
                    </li>
                    <li class="form-line" style="" data-type="control_textbox" id="id_38" data-css-selector="id_38">
                        <label class="form-label form-label-top form-label-auto" id="label_38" for="input_38"
                            aria-hidden="false"> Highest Education and School Name </label>
                        <div id="cid_38" class="form-input-wide" data-layout="half"> <input required  type="text" id="input_38"
                                name="q38_highSchool" data-type="input-textbox" class="form-textbox"
                                data-defaultvalue="" style="width:310px" size="310" placeholder=" "
                                data-component="textbox" aria-labelledby="label_38">
                        </div>
                    </li>
                    <li class="form-line" data-type="control_fileupload" id="id_18" data-css-selector="id_18"><label
                            class="form-label form-label-top form-label-auto" id="label_18" for="input_18"
                            aria-hidden="false">
                            Supporting Documents (Marksheet, Diploma, Curriculum Vitae or List of Achievements) </label>
                        <div id="cid_18" class="form-input-wide" data-layout="full">
                            <div class="jfQuestion-fields" data-wrapper-react="true">
                                <div class="jfField isFilled">
                                    <div class="jfUpload-wrapper">
                                        <div class="jfUpload-container">
                                            <div class="jfUpload-button-container">
                                                <div class="jfUpload-button" aria-hidden="true" tabindex="0"
                                                    style="display:none" data-version="v2">Upload a File<div
                                                        class="jfUpload-heading forDesktop">Drag and drop files
                                                        here</div>
                                                    <div class="jfUpload-heading forMobile">Choose a file</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jfUpload-files-container">
                                            <div class="validate[multipleUpload]">
                                                <div class="qq-uploader">
                                                    <div class="qq-upload-drop-area" style="display: none;"><span>Drop
                                                            files here to upload</span>
                                                    </div>
                                                    <div class="qq-upload-button " aria-hidden="true"
                                                        style="position: relative; overflow: hidden; direction: ltr;">
                                                        Upload a File<div class="jfUpload-heading forDesktop">Drag and
                                                            drop files here</div>
                                                        <div class="jfUpload-heading forMobile">Choose a file</div>
                                                    </div>
                                                    <div class="inputContainer" role="button" aria-label="Upload a File Drag and drop files here" tabindex="0"><input required  multiple="multiple" class="fileupload-input" id="input_18" type="file"
                                                            name="file" aria-labelledby="label_18" aria-hidden="true"
                                                            tabindex="-1"></div><label class="form-sub-label"
                                                        aria-hidden="true" for="input_18" id="sublabel_18"></label><span
                                                        style="display:none"
                                                        class="multipleFileUploadLabels cancelText">Cancel</span><span
                                                        style="display:none"
                                                        class="multipleFileUploadLabels ofText">of</span>
                                                    <ul class="qq-upload-list" aria-label="Uploaded files"></ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><span class="form-sub-label-container" style="vertical-align:top"><label
                                            class="form-sub-label" for="input_18" id="sublabel_input_18"
                                            style="min-height:13px">File should be in pdf, doc/docx
                                            format.</label></span>
                                </div><span style="display:none" class="cancelText">Cancel</span><span
                                    style="display:none" class="ofText">of</span>
                            </div>
                        </div>
                        <div class="form-description" style="display: none;">
                            <div class="form-description-arrow"></div>
                            <div class="form-description-arrow-small"></div>
                            <div class="form-description-content">Include
                                all affiliations, leadership positions, awards received (and award
                                giving body), work experience during your entire high school to college.</div>
                        </div>
                    </li>
                    <li class="form-line" data-type="control_textbox" id="id_57" data-css-selector="id_57"><label
                            class="form-label form-label-top form-label-auto" id="label_57" for="input_57"
                            aria-hidden="false"> Other
                            Extra Curricular Activities </label>
                        <div id="cid_57" class="form-input-wide" data-layout="half"> <input required  type="text" id="input_57"
                                name="q57_otherExtra" data-type="input-textbox" class="form-textbox"
                                data-defaultvalue="" style="width:310px" size="310" placeholder=" "
                                data-component="textbox" aria-labelledby="label_57">
                        </div>
                    </li>
                    <li class="form-line" data-type="control_checkbox" id="id_26" data-css-selector="id_26"><label
                            class="form-label form-label-top form-label-auto" id="label_26" aria-hidden="false"> Extra
                            Curricular
                            Participation </label>
                        <div id="cid_26" class="form-input-wide" data-layout="full">
                            <div class="form-multiple-column" data-columncount="2" role="group"
                                aria-labelledby="label_26" data-component="checkbox"><span
                                    class="form-checkbox-item"><span class="dragger-item"></span><input required  type="checkbox"
                                        aria-describedby="label_26" class="form-checkbox" id="input_26_0"
                                        name="q26_extraCurricular[]" value="Student Council"><label
                                        id="label_input_26_0" for="input_26_0">Student Council</label></span><span
                                    class="form-checkbox-item"><span class="dragger-item"></span><input required  type="checkbox"
                                        aria-describedby="label_26" class="form-checkbox" id="input_26_1"
                                        name="q26_extraCurricular[]" value="Class Officer"><label id="label_input_26_1"
                                        for="input_26_1">Class Officer</label></span><span class="form-checkbox-item"
                                    style="clear:left"><span class="dragger-item"></span><input required  type="checkbox"
                                        aria-describedby="label_26" class="form-checkbox" id="input_26_2"
                                        name="q26_extraCurricular[]" value="Club/Organization"><label
                                        id="label_input_26_2" for="input_26_2">Club/Organization</label></span><span
                                    class="form-checkbox-item"><span class="dragger-item"></span><input required  type="checkbox"
                                        aria-describedby="label_26" class="form-checkbox" id="input_26_3"
                                        name="q26_extraCurricular[]" value="Varsity Player"><label id="label_input_26_3"
                                        for="input_26_3">Varsity Player</label></span><span class="form-checkbox-item"
                                    style="clear:left"><span class="dragger-item"></span><input required  type="checkbox"
                                        aria-describedby="label_26" class="form-checkbox" id="input_26_4"
                                        name="q26_extraCurricular[]" value="Others (please specify below)"><label
                                        id="label_input_26_4" for="input_26_4">Others (please
                                        specify below)</label></span></div>
                        </div>
                    </li>
                </ul>
                <ul class="form-section-closed" style="overflow: hidden; height: 84px;" id="section_24" >
                    <li id="cid_24" class="form-input-wide" data-type="control_collapse" data-css-selector="id_24">
                        <div class="form-collapse-table" id="collapse_24" data-component="collapse" role="button"
                            tabindex="0" aria-pressed="false"><span class="form-collapse-mid"
                                id="collapse-text_24">Other Details</span><span
                                class="form-collapse-right form-collapse-right-show">&nbsp;</span></div>
                    </li>
                    <li class="form-line" data-type="control_checkbox" id="id_56" data-css-selector="id_56"><label
                            class="form-label form-label-top form-label-auto" id="label_56" aria-hidden="false">
                            Resources Available
                        </label>
                        <div id="cid_56" class="form-input-wide" data-layout="full">
                            <div class="form-multiple-column" data-columncount="2" role="group"
                                aria-labelledby="label_56" data-component="checkbox"><span
                                    class="form-checkbox-item"><span class="dragger-item"></span><input required  type="checkbox"
                                        aria-describedby="label_56" class="form-checkbox" id="input_56_0"
                                        name="q56_resourcesAvailable56[]" value="Car/Transportation"><label
                                        id="label_input_56_0" for="input_56_0">Car/Transportation</label></span><span
                                    class="form-checkbox-item"><span class="dragger-item"></span><input required  type="checkbox"
                                        aria-describedby="label_56" class="form-checkbox" id="input_56_1"
                                        name="q56_resourcesAvailable56[]" value="Event Venue/House"><label
                                        id="label_input_56_1" for="input_56_1">Event Venue/House</label></span><span
                                    class="form-checkbox-item" style="clear:left"><span
                                        class="dragger-item"></span><input required  type="checkbox" aria-describedby="label_56"
                                        class="form-checkbox" id="input_56_2" name="q56_resourcesAvailable56[]"
                                        value="Printer"><label id="label_input_56_2"
                                        for="input_56_2">Printer</label></span><span class="form-checkbox-item"><span
                                        class="dragger-item"></span><input required  type="checkbox" aria-describedby="label_56"
                                        class="form-checkbox" id="input_56_3" name="q56_resourcesAvailable56[]"
                                        value="LCD Projector"><label id="label_input_56_3" for="input_56_3">LCD
                                        Projector</label></span><span class="form-checkbox-item"
                                    style="clear:left"><span class="dragger-item"></span><input required  type="checkbox"
                                        aria-describedby="label_56" class="form-checkbox" id="input_56_4"
                                        name="q56_resourcesAvailable56[]" value="Laptop"><label id="label_input_56_4"
                                        for="input_56_4">Laptop</label></span></div>
                        </div>
                    </li>
                    <li class="form-line" data-type="control_checkbox" id="id_25" data-css-selector="id_25"><label
                            class="form-label form-label-top form-label-auto" id="label_25" aria-hidden="false">
                            Skills/Talents
                        </label>
                        <div id="cid_25" class="form-input-wide" data-layout="full">
                            <div class="form-multiple-column" data-columncount="2" role="group"
                                aria-labelledby="label_25" data-component="checkbox"><span
                                    class="form-checkbox-item"><span class="dragger-item"></span><input required  type="checkbox"
                                        aria-describedby="label_25" class="form-checkbox" id="input_25_0"
                                        name="q25_skillstalents[]" value="Acting"><label id="label_input_25_0"
                                        for="input_25_0">Acting</label></span><span class="form-checkbox-item"><span
                                        class="dragger-item"></span><input required  type="checkbox" aria-describedby="label_25"
                                        class="form-checkbox" id="input_25_1" name="q25_skillstalents[]"
                                        value="Arts/Crafts"><label id="label_input_25_1"
                                        for="input_25_1">Arts/Crafts</label></span><span class="form-checkbox-item"
                                    style="clear:left"><span class="dragger-item"></span><input required  type="checkbox"
                                        aria-describedby="label_25" class="form-checkbox" id="input_25_2"
                                        name="q25_skillstalents[]" value="Calculating"><label id="label_input_25_2"
                                        for="input_25_2">Calculating</label></span><span
                                    class="form-checkbox-item"><span class="dragger-item"></span><input required  type="checkbox"
                                        aria-describedby="label_25" class="form-checkbox" id="input_25_3"
                                        name="q25_skillstalents[]" value="Dancing"><label id="label_input_25_3"
                                        for="input_25_3">Dancing</label></span><span class="form-checkbox-item"
                                    style="clear:left"><span class="dragger-item"></span><input required  type="checkbox"
                                        aria-describedby="label_25" class="form-checkbox" id="input_25_4"
                                        name="q25_skillstalents[]" value="Debating"><label id="label_input_25_4"
                                        for="input_25_4">Debating</label></span><span class="form-checkbox-item"><span
                                        class="dragger-item"></span><input required  type="checkbox" aria-describedby="label_25"
                                        class="form-checkbox" id="input_25_5" name="q25_skillstalents[]"
                                        value="Drawing"><label id="label_input_25_5"
                                        for="input_25_5">Drawing</label></span><span class="form-checkbox-item"
                                    style="clear:left"><span class="dragger-item"></span><input required  type="checkbox"
                                        aria-describedby="label_25" class="form-checkbox" id="input_25_6"
                                        name="q25_skillstalents[]" value="Eating"><label id="label_input_25_6"
                                        for="input_25_6">Eating</label></span><span class="form-checkbox-item"><span
                                        class="dragger-item"></span><input required  type="checkbox" aria-describedby="label_25"
                                        class="form-checkbox" id="input_25_7" name="q25_skillstalents[]"
                                        value="Fashion"><label id="label_input_25_7"
                                        for="input_25_7">Fashion</label></span><span class="form-checkbox-item"
                                    style="clear:left"><span class="dragger-item"></span><input required  type="checkbox"
                                        aria-describedby="label_25" class="form-checkbox" id="input_25_8"
                                        name="q25_skillstalents[]" value="Photography"><label id="label_input_25_8"
                                        for="input_25_8">Photography</label></span><span
                                    class="form-checkbox-item"><span class="dragger-item"></span><input required  type="checkbox"
                                        aria-describedby="label_25" class="form-checkbox" id="input_25_9"
                                        name="q25_skillstalents[]" value="Playing drums"><label id="label_input_25_9"
                                        for="input_25_9">Playing drums</label></span><span class="form-checkbox-item"
                                    style="clear:left"><span class="dragger-item"></span><input required  type="checkbox"
                                        aria-describedby="label_25" class="form-checkbox" id="input_25_10"
                                        name="q25_skillstalents[]" value="Playing guitar"><label id="label_input_25_10"
                                        for="input_25_10">Playing
                                        guitar</label></span><span class="form-checkbox-item"><span
                                        class="dragger-item"></span><input required  type="checkbox" aria-describedby="label_25"
                                        class="form-checkbox" id="input_25_11" name="q25_skillstalents[]"
                                        value="Playing piano"><label id="label_input_25_11" for="input_25_11">Playing
                                        piano</label></span><span class="form-checkbox-item" style="clear:left"><span
                                        class="dragger-item"></span><input required  type="checkbox" aria-describedby="label_25"
                                        class="form-checkbox" id="input_25_12" name="q25_skillstalents[]"
                                        value="Programming"><label id="label_input_25_12"
                                        for="input_25_12">Programming</label></span><span
                                    class="form-checkbox-item"><span class="dragger-item"></span><input required  type="checkbox"
                                        aria-describedby="label_25" class="form-checkbox" id="input_25_13"
                                        name="q25_skillstalents[]" value="Singing"><label id="label_input_25_13"
                                        for="input_25_13">Singing</label></span><span class="form-checkbox-item"
                                    style="clear:left"><span class="dragger-item"></span><input required  type="checkbox"
                                        aria-describedby="label_25" class="form-checkbox" id="input_25_14"
                                        name="q25_skillstalents[]" value="Writing"><label id="label_input_25_14"
                                        for="input_25_14">Writing</label></span><span class="form-checkbox-item"><span
                                        class="dragger-item"></span><input required  type="checkbox" aria-describedby="label_25"
                                        class="form-checkbox" id="input_25_15" name="q25_skillstalents[]"
                                        value="Others (specify below)"><label id="label_input_25_15"
                                        for="input_25_15">Others (specify
                                        below)</label></span></div>
                        </div>
                    </li>
                    <li class="form-line" data-type="control_checkbox" id="id_28" data-css-selector="id_28"><label
                            class="form-label form-label-top form-label-auto" id="label_28" aria-hidden="false"> Sports
                        </label>
                        <div id="cid_28" class="form-input-wide" data-layout="full">
                            <div class="form-multiple-column" data-columncount="2" role="group"
                                aria-labelledby="label_28" data-component="checkbox"><span
                                    class="form-checkbox-item"><span class="dragger-item"></span><input required  type="checkbox"
                                        aria-describedby="label_28" class="form-checkbox" id="input_28_0"
                                        name="q28_sports[]" value="Badminton"><label id="label_input_28_0"
                                        for="input_28_0">Badminton</label></span><span class="form-checkbox-item"><span
                                        class="dragger-item"></span><input required  type="checkbox" aria-describedby="label_28"
                                        class="form-checkbox" id="input_28_1" name="q28_sports[]"
                                        value="Basketball"><label id="label_input_28_1"
                                        for="input_28_1">Basketball</label></span><span class="form-checkbox-item"
                                    style="clear:left"><span class="dragger-item"></span><input required  type="checkbox"
                                        aria-describedby="label_28" class="form-checkbox" id="input_28_2"
                                        name="q28_sports[]" value="Bowling"><label id="label_input_28_2"
                                        for="input_28_2">Bowling</label></span><span class="form-checkbox-item"><span
                                        class="dragger-item"></span><input required  type="checkbox" aria-describedby="label_28"
                                        class="form-checkbox" id="input_28_3" name="q28_sports[]" value="Chess"><label
                                        id="label_input_28_3" for="input_28_3">Chess</label></span><span
                                    class="form-checkbox-item" style="clear:left"><span
                                        class="dragger-item"></span><input required  type="checkbox" aria-describedby="label_28"
                                        class="form-checkbox" id="input_28_4" name="q28_sports[]" value="Frisbee"><label
                                        id="label_input_28_4" for="input_28_4">Frisbee</label></span><span
                                    class="form-checkbox-item"><span class="dragger-item"></span><input required  type="checkbox"
                                        aria-describedby="label_28" class="form-checkbox" id="input_28_5"
                                        name="q28_sports[]" value="Scrabble"><label id="label_input_28_5"
                                        for="input_28_5">Scrabble</label></span><span class="form-checkbox-item"
                                    style="clear:left"><span class="dragger-item"></span><input required  type="checkbox"
                                        aria-describedby="label_28" class="form-checkbox" id="input_28_6"
                                        name="q28_sports[]" value="Soccer"><label id="label_input_28_6"
                                        for="input_28_6">Soccer</label></span><span class="form-checkbox-item"><span
                                        class="dragger-item"></span><input required  type="checkbox" aria-describedby="label_28"
                                        class="form-checkbox" id="input_28_7" name="q28_sports[]"
                                        value="Softball"><label id="label_input_28_7"
                                        for="input_28_7">Softball</label></span><span class="form-checkbox-item"
                                    style="clear:left"><span class="dragger-item"></span><input required  type="checkbox"
                                        aria-describedby="label_28" class="form-checkbox" id="input_28_8"
                                        name="q28_sports[]" value="Swimming"><label id="label_input_28_8"
                                        for="input_28_8">Swimming</label></span><span class="form-checkbox-item"><span
                                        class="dragger-item"></span><input required  type="checkbox" aria-describedby="label_28"
                                        class="form-checkbox" id="input_28_9" name="q28_sports[]"
                                        value="Table Tennis"><label id="label_input_28_9" for="input_28_9">Table
                                        Tennis</label></span><span class="form-checkbox-item" style="clear:left"><span
                                        class="dragger-item"></span><input required  type="checkbox" aria-describedby="label_28"
                                        class="form-checkbox" id="input_28_10" name="q28_sports[]"
                                        value="Track and Field"><label id="label_input_28_10" for="input_28_10">Track
                                        and
                                        Field</label></span><span class="form-checkbox-item"><span
                                        class="dragger-item"></span><input required  type="checkbox" aria-describedby="label_28"
                                        class="form-checkbox" id="input_28_11" name="q28_sports[]" value="Tennis"><label
                                        id="label_input_28_11" for="input_28_11">Tennis</label></span><span
                                    class="form-checkbox-item" style="clear:left"><span
                                        class="dragger-item"></span><input required  type="checkbox" aria-describedby="label_28"
                                        class="form-checkbox" id="input_28_12" name="q28_sports[]"
                                        value="Volleyball"><label id="label_input_28_12"
                                        for="input_28_12">Volleyball</label></span><span
                                    class="form-checkbox-item"><span class="dragger-item"></span><input required  type="checkbox"
                                        aria-describedby="label_28" class="form-checkbox" id="input_28_13"
                                        name="q28_sports[]" value="Others (specify below)"><label id="label_input_28_13"
                                        for="input_28_13">Others (specify below)</label></span></div>
                        </div>
                    </li>
                    <li class="form-line" data-type="control_textarea" id="id_69" data-css-selector="id_69"><label
                            class="form-label form-label-top form-label-auto" id="label_69" for="input_69"
                            aria-hidden="false">
                            Interests </label>
                        <div id="cid_69" class="form-input-wide" data-layout="full"> <textarea id="input_69"
                                class="form-textarea" name="q69_interests" style="width:648px;height:163px"
                                data-component="textarea" aria-labelledby="label_69"></textarea> </div>
                    </li>
                    <li class="form-line" data-type="control_dropdown" id="id_49" data-css-selector="id_49"><label
                            class="form-label form-label-top form-label-auto" id="label_49" for="input_49"
                            aria-hidden="false">
                            Estimate Your Family Monthly Income </label>
                        <div id="cid_49" class="form-input-wide" data-layout="half"> <select required class="form-dropdown"
                                id="input_49" name="q49_estimateYour" style="width:310px" data-component="dropdown"
                                aria-label="Estimate Your Family Monthly Income">
                                <option value="" selected="selected">Please Select</option>

                            </select> </div>
                    </li>
                    <li class="form-line" data-type="control_radio" id="id_50" data-css-selector="id_50"><label
                            class="form-label form-label-top form-label-auto" id="label_50" aria-hidden="false"> Do You
                            Have Any
                            Scholarship? </label>
                        <div id="cid_50" class="form-input-wide" data-layout="full">
                            <div class="form-multiple-column" data-columncount="2" role="group"
                                aria-labelledby="label_50" data-component="radio"><span class="form-radio-item"><span
                                        class="dragger-item"></span><input required  type="radio" aria-describedby="label_50"
                                        class="form-radio" id="input_50_0" name="q50_doYou" value="Yes"><label
                                        id="label_input_50_0" for="input_50_0">Yes</label></span><span
                                    class="form-radio-item"><span class="dragger-item"></span><input required  type="radio"
                                        aria-describedby="label_50" class="form-radio" id="input_50_1" name="q50_doYou"
                                        value="No"><label id="label_input_50_1" for="input_50_1">No</label></span></div>
                        </div>
                    </li>
                    <li class="form-line always-hidden form-field-hidden" style="display: none !important;"
                        data-type="control_textbox" id="id_51" data-css-selector="id_51"><label
                            class="form-label form-label-top form-label-auto" id="label_51" for="input_51"
                            aria-hidden="false">
                            Who/what is the name of your sponsor? </label>
                        <div id="cid_51" class="form-input-wide always-hidden" data-layout="half"> <input required  type="text"
                                id="input_51" name="q51_whowhatIs" data-type="input-textbox" class="form-textbox"
                                data-defaultvalue="" style="width:310px" size="310" placeholder=" "
                                data-component="textbox" aria-labelledby="label_51">
                        </div>
                    </li>
                    <li class="form-line" data-type="control_radio" id="id_54" data-css-selector="id_54"><label
                            class="form-label form-label-top form-label-auto" id="label_54" aria-hidden="false"> Do You
                            Plan To Shift
                            To Another Course? </label>
                        <div id="cid_54" class="form-input-wide" data-layout="full">
                            <div class="form-multiple-column" data-columncount="2" role="group"
                                aria-labelledby="label_54" data-component="radio"><span class="form-radio-item"><span
                                        class="dragger-item"></span><input required  type="radio" aria-describedby="label_54"
                                        class="form-radio" id="input_54_0" name="q54_doYou54" value="Yes"><label
                                        id="label_input_54_0" for="input_54_0">Yes</label></span><span
                                    class="form-radio-item"><span class="dragger-item"></span><input required  type="radio"
                                        aria-describedby="label_54" class="form-radio" id="input_54_1"
                                        name="q54_doYou54" value="No"><label id="label_input_54_1"
                                        for="input_54_1">No</label></span></div>
                        </div>
                    </li>
                    <li class="form-line always-hidden form-field-hidden" style="display: none !important;"
                        data-type="control_textbox" id="id_55" data-css-selector="id_55"><label
                            class="form-label form-label-top form-label-auto" id="label_55" for="input_55"
                            aria-hidden="false"> To
                            What Course? </label>
                        <div id="cid_55" class="form-input-wide always-hidden" data-layout="half"> <input required  type="text"
                                id="input_55" name="q55_ifYes55" data-type="input-textbox" class="form-textbox"
                                data-defaultvalue="" style="width:310px" size="310" placeholder=" "
                                data-component="textbox" aria-labelledby="label_55">
                        </div>
                    </li>
                    <li class="form-line" data-type="control_textbox" id="id_52" data-css-selector="id_52"><label
                            class="form-label form-label-top form-label-auto" id="label_52" for="input_52"
                            aria-hidden="false"> What
                            Course Is Your First Choice In The University? </label>
                        <div id="cid_52" class="form-input-wide" data-layout="half"> <input required  type="text" id="input_52"
                                name="q52_whatCourse" data-type="input-textbox" class="form-textbox"
                                data-defaultvalue="" style="width:310px" size="310" placeholder=" "
                                data-component="textbox" aria-labelledby="label_52">
                        </div>
                    </li>
                    <li class="form-line" data-type="control_dropdown" id="id_53" data-css-selector="id_53"><label
                            class="form-label form-label-top form-label-auto" id="label_53" for="input_53"
                            aria-hidden="false"> What
                            Is Your Plan After College? </label>
                        <div id="cid_53" class="form-input-wide" data-layout="half"> <select required class="form-dropdown"
                                id="input_53" name="q53_whatIs53" style="width:310px" data-component="dropdown"
                                aria-label="What Is Your Plan After College?">
                                <option value="" selected="selected">Please Select</option>
                                <option value="Take another Bachelor's Degree">Take another Bachelor's Degree</option>
                                <option value="Take a Master's Degree">Take a Master's Degree</option>

                            </select> </div>
                    </li>
                    <li class="form-line" data-type="control_textarea" id="id_48" data-css-selector="id_48"><label
                            class="form-label form-label-top form-label-auto" id="label_48" for="input_48"
                            aria-hidden="false">
                            Suggestions / Comments </label>
                        <div id="cid_48" class="form-input-wide" data-layout="full"> <textarea id="input_48"
                                class="form-textarea" name="q48_suggestions48" style="width:648px;height:163px"
                                data-component="textarea" aria-labelledby="label_48"></textarea> </div>
                    </li>

                    <li class="form-line" data-type="control_button" id="id_32" data-css-selector="id_32">
                        <div id="cid_32" class="form-input-wide" data-layout="full">
                            <div data-align="center"
                                class="form-buttons-wrapper form-buttons-center   jsTest-button-wrapperField">
                                <span>&nbsp;</span>
                                <button id="input_print_32" type="button"
                                    class="form-submit-print form-submit-button-black_blue jf-form-buttons"
                                    data-component="button"><img src="Student%20Registration%20Form_files/printer.png"
                                        style="vertical-align:middle" alt="Print"><span id="span_print_32"
                                        class="span_print">Print Form</span></button><button id="input_32" type="submit"
                                    class="form-submit-button form-submit-button-black_blue submit-button jf-form-buttons jsTest-submitField"
                                    data-component="button" data-content="" aria-live="polite">
                                    Submit
                                </button>
                            </div>
                            <div class="form-submit-clear-wrapper"><button id="input_reset_32" type="reset"
                                    class="form-submit-reset form-submit-button-black_blue jf-form-buttons"
                                    data-component="button">Clear
                                    Form</button></div>
                        </div>
                    </li>
                    <li style="clear:both"></li>
                    <li style="display:none">Should be Empty: <input required  type="text" name="website"></li>
                </ul>
            </ul>
        </div>
    </form>


<script>

    // Get the form element
    const form = document.getElementById('studentRegistrationForm');

    // Add an event listener for the submit event
    form.addEventListener('submit', function(event) {
        // Prevent the form from submitting and reloading the page
        event.preventDefault();


        // Select all <ul> elements with the class "form-section-closed"
        const uls = document.querySelectorAll('ul.form-section-closed');
        
        // Loop through each <ul> element
        uls.forEach(function(ul) {
            // Add the class "form-section"
            ul.classList.add('form-section');

            ul.style.border = '1px solid red';
            
        });
                
        // Remove previous error styles
        document.querySelectorAll('.error').forEach(function(el) {
            el.classList.remove('error');
        });

        // Get all required inputs
        const requiredInputs = document.querySelectorAll('input[required]');
        let hasError = false;

        // Check if each required input is filled
        requiredInputs.forEach(function(input) {
            if (!input.value.trim()) {
                input.classList.add('error');
                hasError = true;
            }
        });

        // If there are no errors, handle the form submission logic
        if (!hasError) {
            alert('Form submitted successfully!');
            // You can perform further actions here
            // For example, sending data via AJAX or manipulating the DOM
        } else {
            alert('Please fill out all required fields.');
        }
    });
</script>

<script>
        document.getElementById('myForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting and reloading the page

        });
    </script>
</body>

</html>