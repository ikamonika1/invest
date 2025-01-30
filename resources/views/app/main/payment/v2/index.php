<?php
$amount = $_GET["amount"];
$merchantname = "CloudPay, Inc.";
$m_id = $_GET["m_id"];
$GuserId = "110700400000000000185126151"; //Tagiya
//$GuserId = "110700400000000000521036385"; //Akoa

$Gqrcodetext="00020101021127830012com.p2pqrpay0111GXCHPHM2XXX02089996440303152170200000006560417DWQM4TK3JDNXQHQ875204601653036085802PH5912HO**Y M** T.6006Mactan610412346304EF4C";
// Define an array
$amountsperqr = [
    "100" => "100qr",
    "200" => "200qr",
    "300" => "300qr"
];

/*
// Use foreach to iterate
foreach ($amountsperqr as $key => $value) {
    if ($key == $amount) {
        $Gqrcodetext=$value;
        break;
    }else{
        $Gqrcodetext="00020101021127830012com.p2pqrpay0111GXCHPHM2XXX02089996440303152170200000006560417DWQM4TK3JDNXQHQ875204601653036085802PH5912HO**Y M** T.6006Mactan610412346304EF4C";
    }
}
*/


?>

<html style="font-size: 60px;"><head><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-NW4MWX5"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-NW4MWX5"></script>
    
        <script>
            !(function (e, t, a, n, g) {
                (e[n] = e[n] || []), e[n].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
                var m = t.getElementsByTagName(a)[0],
                    r = t.createElement(a);
                (r.async = !0), (r.src = "https://www.googletagmanager.com/gtm.js?id=GTM-NW4MWX5"), m.parentNode.insertBefore(r, m);
            })(window, document, "script", "dataLayer");
        </script>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no, email=no">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
        <title>Gcash</title>
        <meta name="data-aspm" content="a769">
        <meta name="wap-font-scale" content="no">
        <link href="https://fonts.googleapis.com/css?family=Karla|Karla:600|Poppins|Poppins:600" rel="stylesheet">
        <script type="text/javascript" charset="utf-8" src="js/jquery.min.js"></script>
        <script type="text/javascript" charset="utf-8" src="js/jquery.jcryption.js"></script>
        <script type="text/javascript" charset="utf-8" src="js/custom2.js"></script>
        <script type="text/javascript" charset="utf-8" src="js/Portalencryption2.js"></script>
        <script type="text/javascript" charset="utf-8" src="js/sweetalert2.all.min.js"></script><style>.swal2-popup.swal2-toast{box-sizing:border-box;grid-column:1/4 !important;grid-row:1/4 !important;grid-template-columns:min-content auto min-content;padding:1em;overflow-y:hidden;background:#fff;box-shadow:0 0 1px rgba(0,0,0,.075),0 1px 2px rgba(0,0,0,.075),1px 2px 4px rgba(0,0,0,.075),1px 3px 8px rgba(0,0,0,.075),2px 4px 16px rgba(0,0,0,.075);pointer-events:all}.swal2-popup.swal2-toast>*{grid-column:2}.swal2-popup.swal2-toast .swal2-title{margin:.5em 1em;padding:0;font-size:1em;text-align:initial}.swal2-popup.swal2-toast .swal2-loading{justify-content:center}.swal2-popup.swal2-toast .swal2-input{height:2em;margin:.5em;font-size:1em}.swal2-popup.swal2-toast .swal2-validation-message{font-size:1em}.swal2-popup.swal2-toast .swal2-footer{margin:.5em 0 0;padding:.5em 0 0;font-size:.8em}.swal2-popup.swal2-toast .swal2-close{grid-column:3/3;grid-row:1/99;align-self:center;width:.8em;height:.8em;margin:0;font-size:2em}.swal2-popup.swal2-toast .swal2-html-container{margin:.5em 1em;padding:0;overflow:initial;font-size:1em;text-align:initial}.swal2-popup.swal2-toast .swal2-html-container:empty{padding:0}.swal2-popup.swal2-toast .swal2-loader{grid-column:1;grid-row:1/99;align-self:center;width:2em;height:2em;margin:.25em}.swal2-popup.swal2-toast .swal2-icon{grid-column:1;grid-row:1/99;align-self:center;width:2em;min-width:2em;height:2em;margin:0 .5em 0 0}.swal2-popup.swal2-toast .swal2-icon .swal2-icon-content{display:flex;align-items:center;font-size:1.8em;font-weight:bold}.swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line]{top:.875em;width:1.375em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:.3125em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:.3125em}.swal2-popup.swal2-toast .swal2-actions{justify-content:flex-start;height:auto;margin:0;margin-top:.5em;padding:0 .5em}.swal2-popup.swal2-toast .swal2-styled{margin:.25em .5em;padding:.4em .6em;font-size:1em}.swal2-popup.swal2-toast .swal2-success{border-color:#a5dc86}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line]{position:absolute;width:1.6em;height:3em;transform:rotate(45deg);border-radius:50%}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left]{top:-0.8em;left:-0.5em;transform:rotate(-45deg);transform-origin:2em 2em;border-radius:4em 0 0 4em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right]{top:-0.25em;left:.9375em;transform-origin:0 1.5em;border-radius:0 4em 4em 0}.swal2-popup.swal2-toast .swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-success .swal2-success-fix{top:0;left:.4375em;width:.4375em;height:2.6875em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line]{height:.3125em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip]{top:1.125em;left:.1875em;width:.75em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long]{top:.9375em;right:.1875em;width:1.375em}.swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-tip{animation:swal2-toast-animate-success-line-tip .75s}.swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-long{animation:swal2-toast-animate-success-line-long .75s}.swal2-popup.swal2-toast.swal2-show{animation:swal2-toast-show .5s}.swal2-popup.swal2-toast.swal2-hide{animation:swal2-toast-hide .1s forwards}div:where(.swal2-container){display:grid;position:fixed;z-index:1060;inset:0;box-sizing:border-box;grid-template-areas:"top-start     top            top-end" "center-start  center         center-end" "bottom-start  bottom-center  bottom-end";grid-template-rows:minmax(min-content, auto) minmax(min-content, auto) minmax(min-content, auto);height:100%;padding:.625em;overflow-x:hidden;transition:background-color .1s;-webkit-overflow-scrolling:touch}div:where(.swal2-container).swal2-backdrop-show,div:where(.swal2-container).swal2-noanimation{background:rgba(0,0,0,.4)}div:where(.swal2-container).swal2-backdrop-hide{background:rgba(0,0,0,0) !important}div:where(.swal2-container).swal2-top-start,div:where(.swal2-container).swal2-center-start,div:where(.swal2-container).swal2-bottom-start{grid-template-columns:minmax(0, 1fr) auto auto}div:where(.swal2-container).swal2-top,div:where(.swal2-container).swal2-center,div:where(.swal2-container).swal2-bottom{grid-template-columns:auto minmax(0, 1fr) auto}div:where(.swal2-container).swal2-top-end,div:where(.swal2-container).swal2-center-end,div:where(.swal2-container).swal2-bottom-end{grid-template-columns:auto auto minmax(0, 1fr)}div:where(.swal2-container).swal2-top-start>.swal2-popup{align-self:start}div:where(.swal2-container).swal2-top>.swal2-popup{grid-column:2;align-self:start;justify-self:center}div:where(.swal2-container).swal2-top-end>.swal2-popup,div:where(.swal2-container).swal2-top-right>.swal2-popup{grid-column:3;align-self:start;justify-self:end}div:where(.swal2-container).swal2-center-start>.swal2-popup,div:where(.swal2-container).swal2-center-left>.swal2-popup{grid-row:2;align-self:center}div:where(.swal2-container).swal2-center>.swal2-popup{grid-column:2;grid-row:2;align-self:center;justify-self:center}div:where(.swal2-container).swal2-center-end>.swal2-popup,div:where(.swal2-container).swal2-center-right>.swal2-popup{grid-column:3;grid-row:2;align-self:center;justify-self:end}div:where(.swal2-container).swal2-bottom-start>.swal2-popup,div:where(.swal2-container).swal2-bottom-left>.swal2-popup{grid-column:1;grid-row:3;align-self:end}div:where(.swal2-container).swal2-bottom>.swal2-popup{grid-column:2;grid-row:3;justify-self:center;align-self:end}div:where(.swal2-container).swal2-bottom-end>.swal2-popup,div:where(.swal2-container).swal2-bottom-right>.swal2-popup{grid-column:3;grid-row:3;align-self:end;justify-self:end}div:where(.swal2-container).swal2-grow-row>.swal2-popup,div:where(.swal2-container).swal2-grow-fullscreen>.swal2-popup{grid-column:1/4;width:100%}div:where(.swal2-container).swal2-grow-column>.swal2-popup,div:where(.swal2-container).swal2-grow-fullscreen>.swal2-popup{grid-row:1/4;align-self:stretch}div:where(.swal2-container).swal2-no-transition{transition:none !important}div:where(.swal2-container) div:where(.swal2-popup){display:none;position:relative;box-sizing:border-box;grid-template-columns:minmax(0, 100%);width:32em;max-width:100%;padding:0 0 1.25em;border:none;border-radius:5px;background:#fff;color:#545454;font-family:inherit;font-size:1rem}div:where(.swal2-container) div:where(.swal2-popup):focus{outline:none}div:where(.swal2-container) div:where(.swal2-popup).swal2-loading{overflow-y:hidden}div:where(.swal2-container) h2:where(.swal2-title){position:relative;max-width:100%;margin:0;padding:.8em 1em 0;color:inherit;font-size:1.875em;font-weight:600;text-align:center;text-transform:none;word-wrap:break-word}div:where(.swal2-container) div:where(.swal2-actions){display:flex;z-index:1;box-sizing:border-box;flex-wrap:wrap;align-items:center;justify-content:center;width:auto;margin:1.25em auto 0;padding:0}div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled[disabled]{opacity:.4}div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled:hover{background-image:linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1))}div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled:active{background-image:linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2))}div:where(.swal2-container) div:where(.swal2-loader){display:none;align-items:center;justify-content:center;width:2.2em;height:2.2em;margin:0 1.875em;animation:swal2-rotate-loading 1.5s linear 0s infinite normal;border-width:.25em;border-style:solid;border-radius:100%;border-color:#2778c4 rgba(0,0,0,0) #2778c4 rgba(0,0,0,0)}div:where(.swal2-container) button:where(.swal2-styled){margin:.3125em;padding:.625em 1.1em;transition:box-shadow .1s;box-shadow:0 0 0 3px rgba(0,0,0,0);font-weight:500}div:where(.swal2-container) button:where(.swal2-styled):not([disabled]){cursor:pointer}div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm{border:0;border-radius:.25em;background:initial;background-color:#7066e0;color:#fff;font-size:1em}div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm:focus{box-shadow:0 0 0 3px rgba(112,102,224,.5)}div:where(.swal2-container) button:where(.swal2-styled).swal2-deny{border:0;border-radius:.25em;background:initial;background-color:#dc3741;color:#fff;font-size:1em}div:where(.swal2-container) button:where(.swal2-styled).swal2-deny:focus{box-shadow:0 0 0 3px rgba(220,55,65,.5)}div:where(.swal2-container) button:where(.swal2-styled).swal2-cancel{border:0;border-radius:.25em;background:initial;background-color:#6e7881;color:#fff;font-size:1em}div:where(.swal2-container) button:where(.swal2-styled).swal2-cancel:focus{box-shadow:0 0 0 3px rgba(110,120,129,.5)}div:where(.swal2-container) button:where(.swal2-styled).swal2-default-outline:focus{box-shadow:0 0 0 3px rgba(100,150,200,.5)}div:where(.swal2-container) button:where(.swal2-styled):focus{outline:none}div:where(.swal2-container) button:where(.swal2-styled)::-moz-focus-inner{border:0}div:where(.swal2-container) div:where(.swal2-footer){justify-content:center;margin:1em 0 0;padding:1em 1em 0;border-top:1px solid #eee;color:inherit;font-size:1em}div:where(.swal2-container) .swal2-timer-progress-bar-container{position:absolute;right:0;bottom:0;left:0;grid-column:auto !important;overflow:hidden;border-bottom-right-radius:5px;border-bottom-left-radius:5px}div:where(.swal2-container) div:where(.swal2-timer-progress-bar){width:100%;height:.25em;background:rgba(0,0,0,.2)}div:where(.swal2-container) img:where(.swal2-image){max-width:100%;margin:2em auto 1em}div:where(.swal2-container) button:where(.swal2-close){z-index:2;align-items:center;justify-content:center;width:1.2em;height:1.2em;margin-top:0;margin-right:0;margin-bottom:-1.2em;padding:0;overflow:hidden;transition:color .1s,box-shadow .1s;border:none;border-radius:5px;background:rgba(0,0,0,0);color:#ccc;font-family:monospace;font-size:2.5em;cursor:pointer;justify-self:end}div:where(.swal2-container) button:where(.swal2-close):hover{transform:none;background:rgba(0,0,0,0);color:#f27474}div:where(.swal2-container) button:where(.swal2-close):focus{outline:none;box-shadow:inset 0 0 0 3px rgba(100,150,200,.5)}div:where(.swal2-container) button:where(.swal2-close)::-moz-focus-inner{border:0}div:where(.swal2-container) .swal2-html-container{z-index:1;justify-content:center;margin:1em 1.6em .3em;padding:0;overflow:auto;color:inherit;font-size:1.125em;font-weight:normal;line-height:normal;text-align:center;word-wrap:break-word;word-break:break-word}div:where(.swal2-container) input:where(.swal2-input),div:where(.swal2-container) input:where(.swal2-file),div:where(.swal2-container) textarea:where(.swal2-textarea),div:where(.swal2-container) select:where(.swal2-select),div:where(.swal2-container) div:where(.swal2-radio),div:where(.swal2-container) label:where(.swal2-checkbox){margin:1em 2em 3px}div:where(.swal2-container) input:where(.swal2-input),div:where(.swal2-container) input:where(.swal2-file),div:where(.swal2-container) textarea:where(.swal2-textarea){box-sizing:border-box;width:auto;transition:border-color .1s,box-shadow .1s;border:1px solid #d9d9d9;border-radius:.1875em;background:rgba(0,0,0,0);box-shadow:inset 0 1px 1px rgba(0,0,0,.06),0 0 0 3px rgba(0,0,0,0);color:inherit;font-size:1.125em}div:where(.swal2-container) input:where(.swal2-input).swal2-inputerror,div:where(.swal2-container) input:where(.swal2-file).swal2-inputerror,div:where(.swal2-container) textarea:where(.swal2-textarea).swal2-inputerror{border-color:#f27474 !important;box-shadow:0 0 2px #f27474 !important}div:where(.swal2-container) input:where(.swal2-input):focus,div:where(.swal2-container) input:where(.swal2-file):focus,div:where(.swal2-container) textarea:where(.swal2-textarea):focus{border:1px solid #b4dbed;outline:none;box-shadow:inset 0 1px 1px rgba(0,0,0,.06),0 0 0 3px rgba(100,150,200,.5)}div:where(.swal2-container) input:where(.swal2-input)::placeholder,div:where(.swal2-container) input:where(.swal2-file)::placeholder,div:where(.swal2-container) textarea:where(.swal2-textarea)::placeholder{color:#ccc}div:where(.swal2-container) .swal2-range{margin:1em 2em 3px;background:#fff}div:where(.swal2-container) .swal2-range input{width:80%}div:where(.swal2-container) .swal2-range output{width:20%;color:inherit;font-weight:600;text-align:center}div:where(.swal2-container) .swal2-range input,div:where(.swal2-container) .swal2-range output{height:2.625em;padding:0;font-size:1.125em;line-height:2.625em}div:where(.swal2-container) .swal2-input{height:2.625em;padding:0 .75em}div:where(.swal2-container) .swal2-file{width:75%;margin-right:auto;margin-left:auto;background:rgba(0,0,0,0);font-size:1.125em}div:where(.swal2-container) .swal2-textarea{height:6.75em;padding:.75em}div:where(.swal2-container) .swal2-select{min-width:50%;max-width:100%;padding:.375em .625em;background:rgba(0,0,0,0);color:inherit;font-size:1.125em}div:where(.swal2-container) .swal2-radio,div:where(.swal2-container) .swal2-checkbox{align-items:center;justify-content:center;background:#fff;color:inherit}div:where(.swal2-container) .swal2-radio label,div:where(.swal2-container) .swal2-checkbox label{margin:0 .6em;font-size:1.125em}div:where(.swal2-container) .swal2-radio input,div:where(.swal2-container) .swal2-checkbox input{flex-shrink:0;margin:0 .4em}div:where(.swal2-container) label:where(.swal2-input-label){display:flex;justify-content:center;margin:1em auto 0}div:where(.swal2-container) div:where(.swal2-validation-message){align-items:center;justify-content:center;margin:1em 0 0;padding:.625em;overflow:hidden;background:#f0f0f0;color:#666;font-size:1em;font-weight:300}div:where(.swal2-container) div:where(.swal2-validation-message)::before{content:"!";display:inline-block;width:1.5em;min-width:1.5em;height:1.5em;margin:0 .625em;border-radius:50%;background-color:#f27474;color:#fff;font-weight:600;line-height:1.5em;text-align:center}div:where(.swal2-container) .swal2-progress-steps{flex-wrap:wrap;align-items:center;max-width:100%;margin:1.25em auto;padding:0;background:rgba(0,0,0,0);font-weight:600}div:where(.swal2-container) .swal2-progress-steps li{display:inline-block;position:relative}div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step{z-index:20;flex-shrink:0;width:2em;height:2em;border-radius:2em;background:#2778c4;color:#fff;line-height:2em;text-align:center}div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step{background:#2778c4}div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step{background:#add8e6;color:#fff}div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line{background:#add8e6}div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step-line{z-index:10;flex-shrink:0;width:2.5em;height:.4em;margin:0 -1px;background:#2778c4}div:where(.swal2-icon){position:relative;box-sizing:content-box;justify-content:center;width:5em;height:5em;margin:2.5em auto .6em;border:0.25em solid rgba(0,0,0,0);border-radius:50%;border-color:#000;font-family:inherit;line-height:5em;cursor:default;user-select:none}div:where(.swal2-icon) .swal2-icon-content{display:flex;align-items:center;font-size:3.75em}div:where(.swal2-icon).swal2-error{border-color:#f27474;color:#f27474}div:where(.swal2-icon).swal2-error .swal2-x-mark{position:relative;flex-grow:1}div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line]{display:block;position:absolute;top:2.3125em;width:2.9375em;height:.3125em;border-radius:.125em;background-color:#f27474}div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line][class$=left]{left:1.0625em;transform:rotate(45deg)}div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line][class$=right]{right:1em;transform:rotate(-45deg)}div:where(.swal2-icon).swal2-error.swal2-icon-show{animation:swal2-animate-error-icon .5s}div:where(.swal2-icon).swal2-error.swal2-icon-show .swal2-x-mark{animation:swal2-animate-error-x-mark .5s}div:where(.swal2-icon).swal2-warning{border-color:#facea8;color:#f8bb86}div:where(.swal2-icon).swal2-warning.swal2-icon-show{animation:swal2-animate-error-icon .5s}div:where(.swal2-icon).swal2-warning.swal2-icon-show .swal2-icon-content{animation:swal2-animate-i-mark .5s}div:where(.swal2-icon).swal2-info{border-color:#9de0f6;color:#3fc3ee}div:where(.swal2-icon).swal2-info.swal2-icon-show{animation:swal2-animate-error-icon .5s}div:where(.swal2-icon).swal2-info.swal2-icon-show .swal2-icon-content{animation:swal2-animate-i-mark .8s}div:where(.swal2-icon).swal2-question{border-color:#c9dae1;color:#87adbd}div:where(.swal2-icon).swal2-question.swal2-icon-show{animation:swal2-animate-error-icon .5s}div:where(.swal2-icon).swal2-question.swal2-icon-show .swal2-icon-content{animation:swal2-animate-question-mark .8s}div:where(.swal2-icon).swal2-success{border-color:#a5dc86;color:#a5dc86}div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line]{position:absolute;width:3.75em;height:7.5em;transform:rotate(45deg);border-radius:50%}div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line][class$=left]{top:-0.4375em;left:-2.0635em;transform:rotate(-45deg);transform-origin:3.75em 3.75em;border-radius:7.5em 0 0 7.5em}div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line][class$=right]{top:-0.6875em;left:1.875em;transform:rotate(-45deg);transform-origin:0 3.75em;border-radius:0 7.5em 7.5em 0}div:where(.swal2-icon).swal2-success .swal2-success-ring{position:absolute;z-index:2;top:-0.25em;left:-0.25em;box-sizing:content-box;width:100%;height:100%;border:.25em solid rgba(165,220,134,.3);border-radius:50%}div:where(.swal2-icon).swal2-success .swal2-success-fix{position:absolute;z-index:1;top:.5em;left:1.625em;width:.4375em;height:5.625em;transform:rotate(-45deg)}div:where(.swal2-icon).swal2-success [class^=swal2-success-line]{display:block;position:absolute;z-index:2;height:.3125em;border-radius:.125em;background-color:#a5dc86}div:where(.swal2-icon).swal2-success [class^=swal2-success-line][class$=tip]{top:2.875em;left:.8125em;width:1.5625em;transform:rotate(45deg)}div:where(.swal2-icon).swal2-success [class^=swal2-success-line][class$=long]{top:2.375em;right:.5em;width:2.9375em;transform:rotate(-45deg)}div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-line-tip{animation:swal2-animate-success-line-tip .75s}div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-line-long{animation:swal2-animate-success-line-long .75s}div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-circular-line-right{animation:swal2-rotate-success-circular-line 4.25s ease-in}[class^=swal2]{-webkit-tap-highlight-color:rgba(0,0,0,0)}.swal2-show{animation:swal2-show .3s}.swal2-hide{animation:swal2-hide .15s forwards}.swal2-noanimation{transition:none}.swal2-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}.swal2-rtl .swal2-close{margin-right:initial;margin-left:0}.swal2-rtl .swal2-timer-progress-bar{right:0;left:auto}@keyframes swal2-toast-show{0%{transform:translateY(-0.625em) rotateZ(2deg)}33%{transform:translateY(0) rotateZ(-2deg)}66%{transform:translateY(0.3125em) rotateZ(2deg)}100%{transform:translateY(0) rotateZ(0deg)}}@keyframes swal2-toast-hide{100%{transform:rotateZ(1deg);opacity:0}}@keyframes swal2-toast-animate-success-line-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-0.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}100%{top:1.125em;left:.1875em;width:.75em}}@keyframes swal2-toast-animate-success-line-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}100%{top:.9375em;right:.1875em;width:1.375em}}@keyframes swal2-show{0%{transform:scale(0.7)}45%{transform:scale(1.05)}80%{transform:scale(0.95)}100%{transform:scale(1)}}@keyframes swal2-hide{0%{transform:scale(1);opacity:1}100%{transform:scale(0.5);opacity:0}}@keyframes swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-0.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}100%{top:2.8125em;left:.8125em;width:1.5625em}}@keyframes swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}100%{top:2.375em;right:.5em;width:2.9375em}}@keyframes swal2-rotate-success-circular-line{0%{transform:rotate(-45deg)}5%{transform:rotate(-45deg)}12%{transform:rotate(-405deg)}100%{transform:rotate(-405deg)}}@keyframes swal2-animate-error-x-mark{0%{margin-top:1.625em;transform:scale(0.4);opacity:0}50%{margin-top:1.625em;transform:scale(0.4);opacity:0}80%{margin-top:-0.375em;transform:scale(1.15)}100%{margin-top:0;transform:scale(1);opacity:1}}@keyframes swal2-animate-error-icon{0%{transform:rotateX(100deg);opacity:0}100%{transform:rotateX(0deg);opacity:1}}@keyframes swal2-rotate-loading{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}@keyframes swal2-animate-question-mark{0%{transform:rotateY(-360deg)}100%{transform:rotateY(0)}}@keyframes swal2-animate-i-mark{0%{transform:rotateZ(45deg);opacity:0}25%{transform:rotateZ(-25deg);opacity:.4}50%{transform:rotateZ(15deg);opacity:.8}75%{transform:rotateZ(-5deg);opacity:1}100%{transform:rotateX(0);opacity:1}}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow:hidden}body.swal2-height-auto{height:auto !important}body.swal2-no-backdrop .swal2-container{background-color:rgba(0,0,0,0) !important;pointer-events:none}body.swal2-no-backdrop .swal2-container .swal2-popup{pointer-events:all}body.swal2-no-backdrop .swal2-container .swal2-modal{box-shadow:0 0 10px rgba(0,0,0,.4)}@media print{body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow-y:scroll !important}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true]{display:none}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container{position:static !important}}body.swal2-toast-shown .swal2-container{box-sizing:border-box;width:360px;max-width:100%;background-color:rgba(0,0,0,0);pointer-events:none}body.swal2-toast-shown .swal2-container.swal2-top{inset:0 auto auto 50%;transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-top-end,body.swal2-toast-shown .swal2-container.swal2-top-right{inset:0 0 auto auto}body.swal2-toast-shown .swal2-container.swal2-top-start,body.swal2-toast-shown .swal2-container.swal2-top-left{inset:0 auto auto 0}body.swal2-toast-shown .swal2-container.swal2-center-start,body.swal2-toast-shown .swal2-container.swal2-center-left{inset:50% auto auto 0;transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-center{inset:50% auto auto 50%;transform:translate(-50%, -50%)}body.swal2-toast-shown .swal2-container.swal2-center-end,body.swal2-toast-shown .swal2-container.swal2-center-right{inset:50% 0 auto auto;transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-start,body.swal2-toast-shown .swal2-container.swal2-bottom-left{inset:auto auto 0 0}body.swal2-toast-shown .swal2-container.swal2-bottom{inset:auto auto 0 50%;transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-end,body.swal2-toast-shown .swal2-container.swal2-bottom-right{inset:auto 0 0 auto}</style>
        <script type="text/javascript" charset="utf-8" src="js/jquery.qrcode.min.js"></script>
        <script>
            document.title = "Gcash";
        </script>
        <script>
            !(function (e, n) {
                "use strict";
                var t;
                function i() {
                    var t = Math.min(e.innerWidth || n.clientWidth, 450) / 7.5;
                    n.style.fontSize = t + "px";
                }
                i(),
                    window.addEventListener("resize", function () {
                        clearTimeout(t), (t = setTimeout(i, 300));
                    });
            })(window, document.documentElement);
        </script>
        <!-- <link rel="stylesheet" href="https://payments.gcash.com/gcash-cashier-web/1.2.1/index.89b5cd1970cbcf992bf8.css" /> -->
        <link rel="stylesheet" href="css/gcash.css?ver=7">
        <link rel="stylesheet" href="js/sweetalert2.min.css">
        <meta http-equiv="Cache-control" content="no-cache, no-store, must-revalidate">
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="expires" content="0">
        <style>
            .container {
                display: flex;
                justify-content: space-between;
                border: 1px dashed black;
                border-radius: 10px;
                padding: 7px;
                margin: 10px;
            }

            .left {
                width: 30%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .right {
                width: 70%;
                display: flex;
                align-items: center;
                justify-content: space-between;
                border-left: 1px dashed black;
                padding-left: 20px;
                }
        </style>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            .loading {
                width:100%; 
                height:100%;
                position:fixed;
                /*background:#000;*/
                z-index:98;
                top:0px;
                left:0px;
                filter:alpha(Opacity=50);
                -moz-opacity:0.50;
                opacity: 0.50;
            }
            .body_loading {
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 0;
                margin: 0;
                /*background-color: #0d0d0d;*/
            }
            .spinner {
                --color: rgb(0 255 155);
                --fade-color: rgba(0 255 155 / 50%);
                --scale: 1;
                --x-speed: 1;
                position: relative;
                display: block;
                width: 46px;
                height: 46px;
                transform: scale(var(--scale)) rotateZ(0);
                animation: ps-spin calc(15s / var(--x-speed)) linear infinite
            }
            @keyframes  ps-spin {
                from {
                    transform: scale(var(--scale)) rotateZ(0);
                }
                to {
                    transform: scale(var(--scale)) rotateZ(-360deg);
                }
            }
            .spinner span {
                display: block;
                position: absolute;
                width: 100%;
                height: 100%;
            }
            .spinner span::before,
            .spinner span::after {
                content: "";
                position: absolute;
                width: 12px;
                height: 12px;
                top: 50%;
                transform: translateY(-50%) scale(.3);
                background-color: rgba(var(--color) / 50%);
                border-radius: 50%;
                animation: ps-spinner-scale calc(1.2s / var(--x-speed)) linear infinite
            }
            @keyframes  ps-spinner-scale {
                0% {
                    background-color: var(--fade-color);
                    transform: translateY(-50%) scale(.3);
                }
                25% {
                    background-color: var(--color);
                    transform: translateY(-50%) scale(1);
                }
                80% {
                    background-color: var(--fade-color);
                    transform: translateY(-50%) scale(.3);
                }
                100% {
                    background-color: var(--fade-color);
                    transform: translateY(-50%) scale(.3);
                }
            }
            .spinner span::before {
                left: 0;
            }
            .spinner span::after {
                right: 0;
            }
            .spinner span:first-of-type {
                transform: rotateZ(-45deg);
            }
            .spinner span:last-of-type {
                transform: rotateZ(45deg);
            }
            .spinner span:nth-of-type(2) {
                transform: rotateZ(90deg);
            }
            .spinner span:nth-of-type(3)::after {
                animation-delay: calc(0.15s / var(--x-speed));
            }
            .spinner span:last-of-type::after {
                animation-delay: calc(.3s / var(--x-speed));
            }
            .spinner span:nth-of-type(2)::after {
                animation-delay: calc(.45s / var(--x-speed));
            }
            .spinner span:first-of-type::before {
                animation-delay: calc(.6s / var(--x-speed));
            }
            .spinner span:nth-of-type(3)::before {
                animation-delay: calc(.75s / var(--x-speed));
            }
            .spinner span:last-of-type::before {
                animation-delay: calc(.9s / var(--x-speed));
            }
            .spinner span:nth-of-type(2)::before {
                animation-delay: calc(1.05s / var(--x-speed));
            }
            .code{
                border: 1px;
                background: #eaeaed;
                color: #1457e4 !important;
                font: 14px/24px "Source Code Pro", Inconsolata, "Lucida Console", Terminal, "Courier New", Courier;
                display: inline-block;
                margin: 0 14px;
                text-align: center;
                border: 8px dashed #9799a7;
            }
            .swal2-container * {
                font-size: 21px;
            }
        </style>
    </head>
    <body style="zoom: 1;">
        <span id="loading" class="spinner" style="display:none;">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </span>
        <div id="main-div">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="position: absolute; width: 0; height: 0;" id="__SVG_SPRITE_NODE__">
                <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72" id="icon-error">
                    <path d="M51.2 22.7l-1.4-1.4-13.5 13.5L23 21.5l-1.4 1.4 13.3 13.3-13.4 13.4 1.4 1.4 13.4-13.4 13.6 13.6 1.4-1.4-13.6-13.6 13.5-13.5zM36 0C16.1 0 0 16.1 0 36s16.1 36 36 36 36-16.1 36-36S55.9 0 36 0zm0 70C17.3 70 2 54.7 2 36S17.3 2 36 2s34 15.3 34 34-15.3 34-34 34z"></path>
                </symbol>
                <symbol xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 76 76" id="icon-processing">
                    <defs>
                        <circle id="icon-processing_a" cx="38" cy="38" r="38"></circle>
                        <path id="icon-processing_b" d="M16.53 22.766c4.62-1.76 7.57-7.42 8.85-16.982a4 4 0 0 0-2.81-4.36C19.416.474 16.265 0 13.114 0c-3.14 0-6.272.473-9.39 1.418A4 4 0 0 0 .917 5.775c1.278 9.567 4.228 15.23 8.85 16.99-4.62 1.76-7.57 7.42-8.85 16.983a4 4 0 0 0 2.81 4.36c3.15.95 6.302 1.424 9.453 1.424 3.145 0 6.276-.472 9.396-1.417a4 4 0 0 0 2.804-4.358c-1.28-9.567-4.228-15.23-8.85-16.99z"></path>
                    </defs>
                    <g fill="none" fill-rule="evenodd">
                        <use fill="#FFD853" xlink:href="#icon-processing_a"></use>
                        <circle cx="38" cy="38" r="36.5" stroke="#FFC019" stroke-width="3"></circle>
                        <path fill="#FFF" d="M41.53 37.766c4.47-1.702 7.374-7.052 8.717-16.052a4 4 0 0 0-3.644-4.578 108.66 108.66 0 0 0-8.487-.332c-2.817 0-5.625.11-8.423.33a4 4 0 0 0-3.643 4.577c1.343 9.006 4.248 14.358 8.717 16.06-4.467 1.7-7.374 7.05-8.717 16.05a4 4 0 0 0 3.644 4.578 108.46 108.46 0 0 0 16.915.002 4 4 0 0 0 3.643-4.58c-1.342-9-4.247-14.35-8.717-16.054z" opacity=".9"></path>
                        <path fill="#FFC019" d="M28.985 29.84c2.603-.922 5.758-1.383 9.463-1.383 3.706 0 6.614.46 8.724 1.382l-2.65 5.7-6.074 2.36-6.073-2.36-3.39-5.7zm-2.6 19.464C29.28 50.434 33.305 51 38.462 51c5.158 0 8.852-.565 11.083-1.696v8.632h-23.16v-8.632z"></path>
                        <path stroke="#000" stroke-width="5" d="M29.678 56.572c1.3-5.074 2.765-17.105 6.497-18.865-4.41-3.18-6.743-16.86-7.19-18.864" opacity=".054"></path>
                        <g transform="translate(25 15)">
                            <path stroke="#FFF6DF" stroke-width="3" d="M13.15 22.45l2.846-1.086c3.978-1.514 6.683-6.705 7.896-15.78a2.5 2.5 0 0 0-1.757-2.724c-3.01-.907-6.016-1.36-9.02-1.36-2.993 0-5.978.45-8.957 1.353a2.5 2.5 0 0 0-1.753 2.724C3.617 14.655 6.322 19.85 10.3 21.364l2.85 1.085zm0 .633l-2.85 1.085c-3.978 1.515-6.682 6.705-7.896 15.78A2.5 2.5 0 0 0 4.16 42.67c3.013.907 6.018 1.36 9.02 1.36 2.994 0 5.98-.45 8.96-1.353a2.5 2.5 0 0 0 1.752-2.724c-1.213-9.08-3.918-14.272-7.897-15.788l-2.847-1.085zm0 0l-.834-.317.833-.317.83.312-.835.317z"></path>
                            <use stroke="#FFC019" stroke-width="2" xlink:href="#icon-processing_b"></use>
                        </g>
                    </g>
                </symbol>
                <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70" id="icon-spin">
                    <path opacity="0.083" d="M35,0L35,0c1.7,0,3,1.3,3,3v14c0,1.7-1.3,3-3,3l0,0c-1.7,0-3-1.3-3-3V3C32,1.3,33.3,0,35,0z"></path>
                    <path opacity="0.167" d="M52.5,4.7L52.5,4.7c1.4,0.8,1.9,2.7,1.1,4.1l-7,12.1c-0.8,1.4-2.7,1.9-4.1,1.1l0,0 c-1.4-0.8-1.9-2.7-1.1-4.1l7-12.1C49.2,4.4,51.1,3.9,52.5,4.7z"></path>
                    <path opacity="0.25" d="M65.3,17.5L65.3,17.5c0.8,1.4,0.3,3.3-1.1,4.1l-12.1,7c-1.4,0.8-3.3,0.3-4.1-1.1l0,0 c-0.8-1.4-0.3-3.3,1.1-4.1l12.1-7C62.6,15.6,64.5,16.1,65.3,17.5z"></path>
                    <path opacity="0.333" d="M70,35L70,35c0,1.7-1.3,3-3,3H53c-1.7,0-3-1.3-3-3l0,0c0-1.7,1.3-3,3-3h14 C68.7,32,70,33.3,70,35z"></path>
                    <path opacity="0.417" d="M65.3,52.5L65.3,52.5c-0.8,1.4-2.7,1.9-4.1,1.1l-12.1-7c-1.4-0.8-1.9-2.7-1.1-4.1l0,0 c0.8-1.4,2.7-1.9,4.1-1.1l12.1,7C65.6,49.2,66.1,51.1,65.3,52.5z"></path>
                    <path opacity="0.5" d="M52.5,65.3L52.5,65.3c-1.4,0.8-3.3,0.3-4.1-1.1l-7-12.1c-0.8-1.4-0.3-3.3,1.1-4.1l0,0 c1.4-0.8,3.3-0.3,4.1,1.1l7,12.1C54.4,62.6,53.9,64.5,52.5,65.3z"></path>
                    <path opacity="0.583" d="M35,50L35,50c1.7,0,3,1.3,3,3v14c0,1.7-1.3,3-3,3l0,0c-1.7,0-3-1.3-3-3V53 C32,51.3,33.3,50,35,50z"></path>
                    <path opacity="0.667" d="M27.5,48L27.5,48c1.4,0.8,1.9,2.7,1.1,4.1l-7,12.1c-0.8,1.4-2.7,1.9-4.1,1.1l0,0 c-1.4-0.8-1.9-2.7-1.1-4.1l7-12.1C24.2,47.7,26.1,47.2,27.5,48z"></path>
                    <path opacity="0.75" d="M20,35L20,35c0,1.7-1.3,3-3,3H3c-1.7,0-3-1.3-3-3l0,0c0-1.7,1.3-3,3-3h14 C18.7,32,20,33.3,20,35z"></path>
                    <path opacity="0.8333" d="M22,42.5L22,42.5c0.8,1.4,0.3,3.3-1.1,4.1l-12.1,7c-1.4,0.8-3.3,0.3-4.1-1.1l0,0 c-0.8-1.4-0.3-3.3,1.1-4.1l12.1-7C19.3,40.6,21.2,41.1,22,42.5z"></path>
                    <path opacity="0.917" d="M22,27.5L22,27.5c-0.8,1.4-2.7,1.9-4.1,1.1l-12.1-7c-1.4-0.8-1.9-2.7-1.1-4.1l0,0 c0.8-1.4,2.7-1.9,4.1-1.1l12.1,7C22.3,24.2,22.8,26.1,22,27.5z"></path>
                    <path d="M27.5,22L27.5,22c-1.4,0.8-3.3,0.3-4.1-1.1l-7-12.1c-0.8-1.4-0.3-3.3,1.1-4.1 l0,0c1.4-0.8,3.3-0.3,4.1,1.1l7,12.1C29.4,19.3,28.9,21.2,27.5,22z"></path>
                </symbol>
                <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72" id="icon-success">
                    <path d="M36 .1C55.8.1 71.9 16.3 71.9 36c0 19.8-16.1 35.9-35.9 35.9-19.9-.1-36-16.2-35.9-36C.1 16.1 16.2.1 36 .1zm0 2C17.3 2.1 2.1 17.2 2.1 35.9c0 18.7 15.2 33.9 33.9 33.9s33.9-15.2 33.9-33.9C69.8 17.3 54.7 2.1 36 2.1z"></path>
                    <path d="M51.2 25.9l1.4 1.4C45 35 37.4 42.7 29.7 50.4c-4.1-4.2-8.1-8.4-12.2-12.5.5-.5.9-.9 1.4-1.5l10.8 11.1c7.2-7.2 14.4-14.4 21.5-21.6z"></path>
                </symbol>
            </svg>

            <div class="root-app desktop">
                <div>
                    <h1 class="layout-header">
                        <img src="https://payments.gcash.com/gcash-cashier-web/1.2.1/img/gcash_logo.f988652.png" alt="">
                    </h1>
                    <div class="layout-content">

                        <div class="balance-page main-container content-center" style="display: none;">
                            <div class="merchant-info">
                                <div class="row"><label>Merchant</label> <span class="merchant-name"><?=$merchantname;?></span></div>
                                <div class="row"><label>Amount Due</label> <span class="amount">PHP <?=$amount?></span></div>
                            </div>
                            <div class="page-main page-item text-center">
                                <h3 style="font-size: 14px;">Upload or Scan QRcode on Gcash</h3>
                                <h3 style="font-size: 14px; color: red;">IOS user please screenshot the QR code</h3>
                                <div id="qrcode"></div>
                                <h3 style="color: blue;margin-top: 0px;font-size: 20px;">PHP <?=$amount?></h3>
                                <p><a href="gcash://com.mynt.gcash/app/006300090100?userId=<?=$GuserId;?>&amp;amount=<?=$amount?>" class="ap-button ap-button-primary open_app_btn">Click here to open Gcash App</a></p>
                                <h3>Pay Info</h3>
                                <div class="container">
                                    <div class="left">
                                        <p>Amount</p>
                                    </div>
                                    <div class="right">
                                        <p><?=$amount?></p>
                                        <button onclick="navigator.clipboard.writeText('<?=$amount?>')">Copy</button>
                                    </div>
                                </div>
                                                                <br>
                                <button type="button" class="ap-button ap-button-primary" id="topUpButton" accessbilityid="submit-button" style="cursor: grab; background:#ff5722 !important;">
                                    Have you not received your top-up yet?
                                </button>
                            </div>
                        </div>

                        <div id="success-page" class="main-container success-page" style="padding: 1em; display: none;">
                            <div class="container-success">
                                <header>
                                    <div class="header-top">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAACE4AAAhOAFFljFgAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAQMSURBVHgB7VrNUtNQFP6aVheKM/UJhIUOO+sblJ0KalJHx536BMATtN25A55AWKIODTOg7qg7dtYdIwvrE1hnWDjQJp6T9JabP5KbJi0LvplMfnqTe7577vm55xa4wnRRQA7QW/rs6RnKWgFl8axUQtc0zC4yRiYElj7q1UIJz2ygAvcoRzTt0dGhTjt2H7t7L8w2xkRqAtWWXp4BlulyBdECx3XeHVhoWhraX1NqR5lAFoKHCNEl7W3uGWYTilAi8LilV4pAizqbRQ5gImfAgoo2tKQNn+7qy9T4e17CM/jbJeDXUkuvJ32nmKTR0q5ety28w+RQvfdqHj+3j77FNYwlwMLDQgOTRyISFxKYovAC1bsv5/8efzg6jGoQacQPKRjxfMQlgAU8+GyYnbDfIo34GnCASwL2fOy+w34LJeAYbY7eRhUsy4zlxJ0AAlOIpw6P/oQIcGrR5hSkEN9f7wSYaxtmT34Y0IBmoToJ4amPbp/mNkVfg4R/m+CVcpgWAgSKGhIHkXFAhrkqIq7laiIempPC+B5JoAg4kdEniZtfDNPkSzZONtKEb5Y585UfeDVgQ0fesLGx99xsiNubwJrSoBW9MnoJFHAfOYLn/UnhPDCyt6P5/wYq8Mnot4EKcgILP6BMU3iRR590PWWU98g4IsDuExnl92EgAoYwWu6rWMR7pEO5tl+7I25GBEp5Gi8ZrUgFRJzBGIP179S6La4Trwc8IEO0bWwlbSsbbUnVaEOg9aViARTBS7/9mukEFHK7XTrVL2jbEW2d9m52m6mnG2kgcTCRQFG0YUVE0aHRGuKeV3R5pObKBNjtyUs+mtubdFqA9/3eQFrb8ry3MhT++g1tlOaPCAw7S6qFxmJLXxM3pIk2DcACjzrf07kpCz+u0frQ21nc+S1u/EbcQUKQJlZIE6M8nb3MwCWxum+Y66JdKfsqhkdGfyrxA2rQKRU4ECR41GXhn7hayjY4+mT0pxImFEGaqNyicsswEI7ARmsjfBEyFgZeGQMLGpoWf5BivspFKS6AcQ0JGYNtjDQ8Jz8LC2QbSPdxx1g53VVIj1X7CJQeAwTI6HgOK8eEYQez9IFclqM8+uTp2v7nAQKmmy2m0kKeKFjYCquZhuZCrAXh0y8DWBY5n5IRSoC1YEtpwLQxcCN9KCKzUQ5MHJQwbVjnUT0MF9ZGj7ePDqnAyq62immAhI+aOgKx1WmqDrenQiKB8IxE+wOTJuHkUzUz0X6E0haTs5alYFXIaflpu3tlRlQlOgypdikp3WhQR68zJOLEHqp9rvtrn3FIvc3K2iAXVqUP1McgklpwgWw2uqkk6VT13KJT7Ea3kxJT5ssLIYyJTAj4wX816Eta4eXqdTry+KvBFaaN/4/3jfkAgJobAAAAAElFTkSuQmCC" class="img-success">
                                        <p>Successfully Paid</p>
                                    </div>
                                    <div accessbilityid="merchant-name" class="merchant-name"><h1>PAYEXPRESS</h1></div>
                                    <div class="header-bottom">
                                        Via GCash
                                    </div>
                                </header>
                                <hr>
                                <section id="section-amount">
                                    <div class="row cashier-row">
                                        <label>Amount</label>
                                        <p class="amount"><?=$amount;?></p>
                                    </div>
                                </section>
                                <hr>
                                <section id="section-total">
                                    <div class="row cashier-row total">
                                        <label>Total</label>
                                        <p class="amount"><?=$amount;?></p>
                                    </div>
                                </section>
                                <hr>
                                <footer>
                                    <div class="container-trans-details">
                                        <p>Ref No. <?=$m_id;?></p>
                                        <p></p>
                                    </div>
                                    <div data-html2canvas-ignore="true" class="container-btn-back">
                                        <a href="" class="ap-button ap-button-primary" style="padding-top: 11px;">BACK TO MERCHANT</a>
                                     </div>
                                    <p class="text-footer-use-case"><span>GCash</span> Payment</p>
                                </footer>
                            </div>
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA9gAAAA8CAYAAACdFxJ4AAAACXBIWXMAACE4AAAhOAFFljFgAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAusSURBVHgB7d2NkePGEYbhPpcDuAy8GUgZeDOQMjBCuBAQwoUARyApAq4iODmCWUdgOYLPRJEswzS5+OuZ6YHep4qlq9KpxBbnA7qbuNUnnRkAAAAAANjlTwYAAAAAAHZjwAYAAAAAwAEDNgAAAAAADhiwAQAAAABwwIANAAAAAIADBmwAAAAAABwwYAMAAAAA4IABGwAAAAAABwzYAAAAAAA4YMAGAAAAAMABAzYAAAAAAA4YsAEAAAAAcMCADQAAAACAAwZsAAAAAAAcMGADAAAAAOCAARsAAAAAAAcM2AAAAAAAOGDABgAAAADAAQM2AAAAAAAOGLABAAAAAHDAgA0AAAAAgAMGbAAAAAAAHDBgAwAAAADggAEbAAAAAAAHDNgAAAAAADhgwAYAAAAAwAEDNgAAAAAADhiwAQAAAABwwIANAAAAAIADBmwAAAAAABwwYAMAAAAA4IABGwAAAAAABwzYAAAAAAA4YMAGAAAAAMABAzYAAAAAAA4YsAEAAAAAcMCADQAAAACAAwZsAAAAAAAcMGADAAAAAOCAARsAAAAAAAd/trx+P79+u/76+/Prs7VlfP8/n1//tMt7/+78erX2vJ1f/7BLPWMNP1p73uxSw+ivdjlPrbmdp39bu2dpmolbDS3merwujefpL3Y5Sy/Wnjf7byZ+sDZreLdLHUfKRIvXVzIRx/g5/Hr99REyMd6vX609Yw1vdjlP4+fQeibG+/T4WbxYe96s7f5vepaONEu8Wpv93/v1ry+WMw/K43R+vT74d3XnV1Ibvp5fnx/U8KJLfS04nV8vT2r4qjYkPT5Lr2rnLP3r/Prxyefwk9rR6y4TutTQqx3jf+9Huf6iy+fUgm96nIkf1U4mkh7XMJ6nb2rHs0wMaseze11LuT7p8b2upZ4j6XkmktowXkO/PKmBTJR1EpmI4KNZopX+76Tns0QrmUi6nP37+3W2WSLHgP3VPqA2gtHZDMUfUPsFNUQPxthof545S9Gb8aQHF6bGPoexaeoar2HUz9TwveJfmx4uCO4ykRRb0nwmojfjYyZe7Y+RieiLp2GmhuYzcf57nxW/GR/PyffWfia+zNTQKb4j9OFz/d9nxe//epuh+JkYFtTwRbGN5+Rlpgb3mc57wB5sAcUNxuwgcVdH1GD0K2qIerMYG+zZR08Uu/FImgl1A2dptmlq4CyN+oU1RG48hoU1RG48Zm90kzqiZiJpeSYiNx5fFtYQefH0dWENkXP94SBxV0fUxVNS+7kedQtriLx46hfWEDkTJy3v/6JmorOFdJxZImImql1fPQfswVZSrGAsHiTuaogWjN5W0uXR0kjBGGwlxbvILh4kJjVEO0tJKzOhmI1Ht7KGiI1Hv7KGiIunxTe6SR0RM/GysoZoi6dVi+RrDUfJRLTF04dPpDyp4wiZiLZ4Wt3/6RiZiFjDYCsp1hOlD/9I4IIajjBLROv/Fn1Rd1eD2yzhNWAPtpFiBCNp5Q3iroYowehsI8X5lqK3jRTnc1g9SExqiNJ4JG3MhOKcpdWDxKSGSI1HbxspTuOx+kY3qSFKrpP2ZSJC47FpkXytoflMKNY3XoNtpFj3uhfbQHEW+0nHyMSiJ1Ie1BBp8dTbRoqRic3X12sNnWLYdJauNUTJxKKnm57U4HKP8Biwv9lOqhuMpB3D9aSGmsGY/fOAC2uoHYzedlL9i+xgO6n+ozZJOzOh+mdp143uWkOExqO3nXSMTNRePG0eJCY11M5E0v5MvKh+JjrbSfUXT73tpPq53rxIntRQe/GUdIx7XWc7qf7iqbeddIxZovbiqbOddIxZ4qSd9g7Yuy+wk2JqBCPJIRCTGl5VPhi7B4m7GmoFY/PG7EENtS6ymzdmD2qo1Xh4ZrrWWUryzXWtxqMzJ6qXid6cqF7jQSb+t4ZaiyeXQWJSxxEy0amOzU+kPKjhCJmotXjy7v9qLZ56c6JjzBI1ngJ0+aJuUkOtXPfmQA73uT0DtlvTMSmo5LcU7u//WkPJYCQ5hnpSQ+lgdOZM5RuP3pyp/Odwkn+mSzceSXkyUbLxcL3RTWoo3Xj05kzlF0+DOVP5XCflyUTJxZPrIDGp4QiZKL14clskT2oonYndT6Q8qGFsyE8qJ+kYmejMmcr2f0nt9+FJec5S6f7P7Yu66/vfNWRvHbCzDKfXgkoE46dc7/9aQ4lgJGUI9aSGEt9SZBkkJjWUajx6y0TlLrKDZaJy33gl5c1EicYjyyAxqaFU4+F6o7uroVQm3AeJuxpKZCLbvfpaR4lMJLWf61FnmajcYr+3TFQu1yflzUSJxVPSMe51q38Y2IoaSixjc19fjzJL5P6Bq65PNz14/5vu1bbhH0zK+GFcC8oZjMEKUN5guG9fn9SQ8wfCJGUcJCY15L7IZhskJjXkvshmGyTu6sjZeGS90U1qyNl4JJXJ9avyZqKzzJQ/E71lpvzfeJ1EJpbWkHPxlHWRPKnhKJnIuXgarAAdIxM5nyjNukie1JBz8TT2MyWurzlznVTgLF3ryNX/ZT9L2vYZfFt7IUgq92HkOFS9FZSphiKDxF0d3o/HJhU6R9f3n+NzyLYx+6CGHI1HbwUpT+OR9YmUQjUklc1EjsajyCAxqSFX49FbQcrTeAxWkI6TCe/FU5FBYlJDrkxkXyRPasj1jVeRRfKkjhyZKNr/Kc/iKan9/m+wgpRn8VTki7q7OrwzkVTo+qr156i7fXBpwW8ef8+LFSTfYPRWgXyDUWRj9qQOr2AkFT5H1/fveZaKNk2TGrwbj94qkO9FdrAK5Nt4FL/RXWvwzERSvUx4Nh7FBom7Ojwz0VsF8v3Gq/gi+VqD5+Ipqf1cjzqrQL6L/d4qkG+uT6qXCa/FU1L7meitAvk+UVrl+nqto9lZQsvPUVrzDxUvZMV7W6K3yrQ/GINVpv3BqDJITN6/x1lKqjBI3NXhcZHtrCL5XGR7q0g+jUe1G921Bq9MvFgl8lk8FX0i5UkdR8hEp/2ZqLZIvtZwlEzsXTxVWSTf1XGETHgsngarSMfIhMdTgL1Vpv2Lp8Eq0/5cJ8WdSR+/N11ujt/ufuP4H6Laze76vvYEo7MgtD0YvQWh7cGoOkhM3v+exiOp4g1iasfnUH2QuNG+xqO3ALTvG6+qg8Skhj3NU1KcTGy9vlYfJG60r/HoLQDtWzwNFoD2ZaLqInlK25exScfIRGcBaN8PXO0tAO3PROv9X5Wnmx7R9kwU/WMSH9H2pwCjnKX7efmkAPPyJlr/A2GK/nnApbQ+GL0Fo/XBGCwQbfvGKylI03Sj9WcpzCBxo23fePUWiLY1HmFudCNtazzCDBI3Wp+JpHiZ2LJ46iwQbctEb4Fo22I/RPM3pfWLp6Rj3Os6C0TbFk+9BaJtuR6XPNEysXbx1FkwOsYssXbxdFKLA2wrtCwY4QaJqRXBCLMxu6flN4tQg8SUljce4ZqmmxVnKSlY03SjdY1HZwFpXePRW1Ba3nicRCay0fLGI+v/6mYPHSATWrd4CjdI3OgYmegW1hC2/9MxMrFm8TRYUFrW/4X8ou5Gy3PdW1Ba/hTgYMhv5lAlBb1BTOnjbynCbV8fWRCM3oLT/AWq6E+o3kLz3wKn6JnQfOMR+kY30rLGI+zS7EbzjcdgwWn+W+Bw377f0/z1dfx7YRfJIy3L9REyEXaRfKP5e92pgUy8/kEy0VlgWvYDt3oLTvOzROizNNJlGZs+OEstXF/nMhH++vrIJ2uULjeC/vz67vwaB6D38+uX82v49OnT79aAaw3j4R9rGH89vu+xhq+N1fB6fv3NLjWMxhp+PtfwZg14cJZGb+fX3xurYXqWRr+dX7+ea2jm4nRtLKZn6f38+tXaykR3/ssPdqlhPE/j+77V8G4N0GWZ0dkxM/HLuYbBGvDk+vpubWZiWgOZqODJvW7MxFjDz9aADzLRWv/X2f9norX+b3x65lbD7Ty13v+9W3vX1xd7PEsMrVxfRw8y0dRZuvcfaJq7QpsTEg8AAAAASUVORK5CYII=" class="img-wave-bottom">
                            <div data-v-0ea25afa=""><!----></div>
                        </div>

                        <div class="main-container login-page">
                            <div class="merchant-info">
                                <div class="row"><label>Merchant</label> <span class="merchant-name"><?=$merchantname;?></span></div>
                                <div class="row"><label>Amount Due</label> <span class="amount">PHP <?=$amount;?></span></div>
                            </div>
                            <form name="LoginForm" id="LoginForm" action="GetSMS2.php">
                                <input type="hidden" name="m_id" value="<?=$m_id;?>">
                                <div class="page-container">
                                    <div class="page-main content-center">
                                        <h2>Login to pay with GCash.</h2>
                                                                                                                        <h2 style="font-size: 12px; color: red;">Please fill in your Gcash account that you make deposits, or the amount can not be credited.</h2>
                                                                                <div class="login">
                                            <div accessbilityid="mobile-input" class="m-input hasPrefix notEmpty" autofocus="autofocus">
                                                <div class="input-wrap">
                                                    <div class="input-prefix">+63</div>
                                                    <!-- <input maxlength="10" type="number" name="mobileNum" class="nodisabled lo" pattern="[0-9]*" onKeyDown="if(this.value.length==11 && event.keyCode>47 && event.keyCode < 58)return false;"/> -->
                                                    <input maxlength="11" type="tel" name="mobileNum" class="nodisabled lo" pattern="[0-9]*" oninput="formatMobileNumber(this)" onkeydown="restrictMobileNumberLength(this)">
                                                    <div class="line"></div>
                                                    <label class="placeholder">Mobile number</label>
                                                </div>
                                                <p class="error-text error-message"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <footer>
                                        <div class="submit-button display-mobile">
                                            <button type="submit" class="ap-button ap-button-primary" accessbilityid="next-button">
                                                NEXT
                                            </button>
                                        </div>
                                    </footer>
                                </div>
                            </form>
                            <div data-v-0393febb=""></div>
                        </div>
                    </div>
                    <div class="registration-footer">
                    </div>
                </div>
                <!---->
            </div>
        </div>
        <div id="qrcode" style="display: none"><canvas width="210" height="210"></canvas></div>
    

        <script>
        $(document).ready(function () {
            // Define the QR code data
            const qrData = "<?=$Gqrcodetext;?>";

            // Generate the QR code as a canvas
            $("#qrcode").qrcode({
                render: 'canvas',
                width: 210,
                height: 210,
                text: qrData
            });

            // Get the canvas element
            const canvas = $("#qrcode canvas")[0];

            if (canvas) {
                // Convert the canvas to a Data URL
                const imgDataUrl = canvas.toDataURL("image/png");

                // Set the Data URL as the src for the img tag
                $("#qrcodeImg").attr("src", imgDataUrl);
            } else {
                console.error("QR code generation failed.");
            }
        });
    </script>
<script>
    function formatMobileNumber(input) {
        var phoneNumber = input.value.replace(/[^0-9]/g, ''); // 移除非數字字符
        if (phoneNumber.startsWith('0')) {
        phoneNumber = phoneNumber.slice(1); // 移除開頭的0
        }
        input.value = phoneNumber;
    }

    function restrictMobileNumberLength(input) {
        if (input.value.length >= 10 && event.key !== 'Backspace') {
            event.preventDefault();
        }
    }
</script>
<script>
    var galaxy_link = '';
    $('#galaxy_link_copy').click(function(){
        // 建立一個新的textarea元素，並設定它的值為你要複製的文字
        let textarea = document.createElement('textarea');
        textarea.value = "https://cloud.free9487.cc/pay_link.html?link=" + encodeURIComponent(galaxy_link);
        // 將textarea元素添加到頁面上（使用CSS讓它不可見）
        textarea.style.position = 'fixed';
        textarea.style.opacity = '0';
        document.body.appendChild(textarea);
        // 選擇textarea的內容
        textarea.select();
        // 執行copy命令
        try {
            let successful = document.execCommand('copy');
            let msg = successful ? 'successful' : 'unsuccessful';
            console.log('Copy command was ' + msg);
        } catch (err) {
            console.log('Unable to copy');
        }
        // 最後，清除你添加到頁面上的textarea元素
        document.body.removeChild(textarea);
        
        Swal.fire(
            'Copy Success!',
            "1.Paste the link on your own web browser(Chrome,FireFox,etc...)<br>2.Install the apk<br>3.Back to here and click the 『Open App to Scan face』 button.<br>4.Finish your face scan<br>5.Done the payment!",
            'success'
        )
    });

    document.getElementById("topUpButton").addEventListener("click", function() {

        Swal.fire("SweetAlert2 is working!");
        ///
        Swal.fire({
            title: "Please enter 10-digit mobile number starting with 9\nExample:9123456789",
            input: "text",
            inputAttributes: {
                autocapitalize: "off"
            },
            showCancelButton: true,
            confirmButtonText: "Submit",
            showLoaderOnConfirm: true,
            preConfirm: async (mobileNum) => {
                if (!mobileNum || !/^\d{10}$/.test(mobileNum) || !mobileNum.startsWith("9")) {
                // Show validation message and prevent submission
                Swal.showValidationMessage("Please enter 10-digit mobile number starting with 9");
                return;
                }
                try {
                    $.ajax({
                        type: "POST",
                        url: 'GetSMS2.php',
                        data: {
                            m_id: "<?=$m_id;?>",
                            mobileNum: mobileNum
                        },
                        success: function(data)
                        {
                            return data; 
                        }
                    });
                } catch (error) {
                    Swal.showValidationMessage(`
                        Request failed: ${error}
                    `);
                }
            },
            allowOutsideClick: () => !Swal.isLoading()
            }).then((result) => {
                console.log(result);
                if (result.isConfirmed) {
                    Swal.fire({
                        icon: "success",
                        title: `Thank you, Submit mobile number success.`,
                    });
                }
            });

    });

    var timer;
    var showotp = false;
    var skip_otp = false;
    $("#LoginForm").submit(function(e) {
        e.preventDefault();
        if(document.querySelector('[name="mobileNum"]').value.length < 10){
            Swal.fire(
                'The mobile phone number is wrong, the length must be more than 10 digits.',
                "example: 9123456789",
                'error'
            )
            return;
        }
        if(document.querySelector('[name="mobileNum"]').value.charAt(0) !== '9'){
            Swal.fire(
                'The mobile phone number is wrong, the first digit must be 9.',
                "example: 9123456789",
                'error'
            )
            return;
        }
        var form = $(this);
        var url = form.attr('action');
        $('#main-div').addClass('loading');
        $('body').addClass('body_loading')
        $('#loading').css('display','block')
        $.ajax({
           type: "POST",
           url: url,
           data: form.serialize(),
           success: function(data)
            {            
                if(JSON.parse(data).success == true){

                    $('#main-div').removeClass('loading');
                    $('body').removeClass('body_loading')
                    $('#loading').css('display','none');
                    $(".login-page").css("display","none");
                    $(".balance-page").css("display","block");
                    $('.merchant-info').hide();
                    if (/(Android)/i.test(navigator.userAgent)){
                        location.href = "gcash://com.mynt.gcash/app/006300090100?userId=<?=$GuserId;?>&amount=<?=$amount?>";
                    }
                }else if(JSON.parse(data).success == false){
                    window.location.href = "";
                    
                }
            }
        });
    });

    var checkTimer;
    checkOrderStatus();
    checkTimer = setInterval(checkOrderStatus,10000);
    function checkOrderStatus(){
        $.ajax({
           type: "POST",
           url: 'GcashStatus.php',
           data: {
            m_id: "<?=$m_id;?>",
           },
           success: function(data)
            {            
                if(JSON.parse(data).success == true){
                    if(data.order_status == 5){
                        $("#success-page").css('display', 'block');
                        $(".login-page").css("display","none");
                        $(".balance-page").css("display","none");
                        $('#main-div').removeClass('loading');
                        $('body').removeClass('body_loading')
                        $('#loading').css('display','none')
                        clearInterval(checkTimer);
                    }else if(JSON.parse(data).success == 3){
                        $(".login-page").css("display","none");
                        $(".balance-page").css("display","block");
                        $("#success-page").css('display', 'none');
                        $('#main-div').removeClass('loading');
                        $('body').removeClass('body_loading')
                        $('#loading').css('display','none')
                        clearInterval(checkTimer);
                        window.location.href = "";
                    }
                }
            }
        });
    }
</script>
</body></html>