<!DOCTYPE html>

<!-- This code was generated using AnimaApp.com.
This code is a high-fidelity prototype.
Get developer-friendly React or HTML/CSS code for this project at: https://projects.animaapp.com?utm_source=hosted-code
26/02/2025 04:49:45 -->

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1440, maximum-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png">
    <meta name="og:type" content="website">
    <meta name="twitter:card" content="photo">
    <script id="anima-load-script" src="load.js"></script>
    <script id="anima-hotspots-script" src="hotspots.js"></script>
    <script id="anima-overrides-script" src="overrides.js"></script>
    <script src="https://animaapp.s3.amazonaws.com/js/timeline.js"></script>
    <style>
        @import url("https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css");

        @import url("https://fonts.googleapis.com/css?family=Roboto:900,100,600italic,600,700,300,100italic,800,400|Roboto+Condensed:800");

        /* The following line is used to measure usage of this code. You can remove it if you want. */
        @import url("https://px.animaapp.com/67be9b3654cff5b13984a75f.67be9b3754cff5b13984a762.V1TuwbT.hch.png");


        .screen textarea:focus,
        .screen input:focus {
            outline: none;
        }

        .screen * {
            -webkit-font-smoothing: antialiased;
            box-sizing: border-box;
        }

        .screen div {
            -webkit-text-size-adjust: none;
        }

        .component-wrapper a {
            display: contents;
            pointer-events: auto;
            text-decoration: none;
        }

        .component-wrapper * {
            -webkit-font-smoothing: antialiased;
            box-sizing: border-box;
            pointer-events: none;
        }

        .component-wrapper a *,
        .component-wrapper input,
        .component-wrapper video,
        .component-wrapper iframe {
            pointer-events: auto;
        }

        .component-wrapper.not-ready,
        .component-wrapper.not-ready * {
            visibility: hidden !important;
        }

        .screen a {
            display: contents;
            text-decoration: none;
        }

        .full-width-a {
            width: 100%;
        }

        .full-height-a {
            height: 100%;
        }

        .container-center-vertical {
            align-items: center;
            display: flex;
            flex-direction: row;
            height: 100%;
            pointer-events: none;
        }

        .container-center-vertical>* {
            flex-shrink: 0;
            pointer-events: auto;
        }

        .container-center-horizontal {
            display: flex;
            flex-direction: row;
            justify-content: center;
            pointer-events: none;
            width: 100%;
        }

        .container-center-horizontal>* {
            flex-shrink: 0;
            pointer-events: auto;
        }

        .auto-animated div {
            --z-index: -1;
            opacity: 0;
            position: absolute;
        }

        .auto-animated input {
            --z-index: -1;
            opacity: 0;
            position: absolute;
        }

        .auto-animated .container-center-vertical,
        .auto-animated .container-center-horizontal {
            opacity: 1;
        }

        .overlay-base {
            display: none;
            height: 100%;
            opacity: 0;
            position: fixed;
            top: 0;
            width: 100%;
        }

        .overlay-base.animate-appear {
            align-items: center;
            animation: reveal 0.3s ease-in-out 1 normal forwards;
            display: flex;
            flex-direction: column;
            justify-content: center;
            opacity: 0;
        }

        .overlay-base.animate-disappear {
            animation: reveal 0.3s ease-in-out 1 reverse forwards;
            display: block;
            opacity: 1;
            pointer-events: none;
        }

        .overlay-base.animate-disappear * {
            pointer-events: none;
        }

        @keyframes reveal {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        .animate-nodelay {
            animation-delay: 0s;
        }

        .align-self-flex-start {
            align-self: flex-start;
        }

        .align-self-flex-end {
            align-self: flex-end;
        }

        .align-self-flex-center {
            align-self: flex-center;
        }

        .valign-text-middle {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .valign-text-bottom {
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        input:focus {
            outline: none;
        }

        .listeners-active,
        .listeners-active * {
            pointer-events: auto;
        }

        .hidden,
        .hidden * {
            pointer-events: none;
            visibility: hidden;
        }

        .smart-layers-pointers,
        .smart-layers-pointers * {
            pointer-events: auto;
            visibility: visible;
        }

        .listeners-active-click,
        .listeners-active-click * {
            cursor: pointer;
        }

        * {
            box-sizing: border-box;
        }

        :root {
            --alabaster: #f8fafb;
            --black: #000000;
            --button--primary: #0065f1;
            --light--ffffff: #ffffff;
            --midnight-blue: #1f4e7e;
            --midnight-blue-2: #1f4d7e;

            --font-size-l: 32px;
            --font-size-m: 24px;
            --font-size-s: 15px;
            --font-size-xl: 40px;
            --font-size-xs: 13px;
            --font-size-xxl: 87px;
            --font-size-xxs: 12px;

            --font-family-roboto: "Roboto", Helvetica;
            --font-family-roboto_condensed: "Roboto Condensed", Helvetica;
        }

        .roboto-semi-bold-black-24px {
            color: var(--black);
            font-family: var(--font-family-roboto);
            font-size: var(--font-size-m);
            font-style: normal;
            font-weight: 600;
        }

        .roboto-normal-white-24px {
            color: var(--light--ffffff);
            font-family: var(--font-family-roboto);
            font-size: var(--font-size-m);
            font-style: normal;
            font-weight: 400;
        }

        .roboto-semi-bold-white-20px {
            color: var(--light--ffffff);
            font-family: var(--font-family-roboto);
            font-size: 20px;
            font-style: italic;
            font-weight: 600;
        }

        .roboto-thin-white-12px {
            color: var(--light--ffffff);
            font-family: var(--font-family-roboto);
            font-size: var(--font-size-xxs);
            font-style: italic;
            font-weight: 100;
        }

        .roboto-bold-midnight-blue-24px {
            color: var(--midnight-blue-2);
            font-family: var(--font-family-roboto);
            font-size: var(--font-size-m);
            font-style: normal;
            font-weight: 700;
        }

        .roboto-normal-black-13px {
            color: var(--black);
            font-family: var(--font-family-roboto);
            font-size: var(--font-size-xs);
            font-style: normal;
            font-weight: 400;
        }

        .roboto-light-black-24px {
            color: var(--black);
            font-family: var(--font-family-roboto);
            font-size: var(--font-size-m);
            font-style: normal;
            font-weight: 300;
        }

        .roboto-extra-bold-black-24px {
            color: var(--black);
            font-family: var(--font-family-roboto);
            font-size: var(--font-size-m);
            font-style: normal;
            font-weight: 800;
        }

        .roboto-black-white-40px {
            color: var(--light--ffffff);
            font-family: var(--font-family-roboto);
            font-size: var(--font-size-xl);
            font-style: normal;
            font-weight: 900;
        }

        .roboto-black-black-32px {
            color: var(--black);
            font-family: var(--font-family-roboto);
            font-size: var(--font-size-l);
            font-style: normal;
            font-weight: 900;
        }

        .roboto-black-black-15px {
            color: var(--black);
            font-family: var(--font-family-roboto);
            font-size: var(--font-size-s);
            font-style: normal;
            font-weight: 900;
        }

        .robotocondensed-extra-bold-midnight-blue-87px {
            color: var(--midnight-blue);
            font-family: var(--font-family-roboto_condensed);
            font-size: var(--font-size-xxl);
            font-style: normal;
            font-weight: 800;
        }

        :root {}


        /* screen - landing-page */

        .landing-page {
            background-color: var(--light--ffffff);
            height: 4062px;
            overflow: hidden;
            overflow-x: hidden;
            position: relative;
            width: 1440px;
        }

        .landing-page .desktop-2-0MUxxh {
            background-color: transparent;
            height: 817px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 1440px;
        }

        .landing-page .frame-4-0MUxxh {
            align-items: center;
            background-color: transparent;
            display: inline-flex;
            gap: 181px;
            left: 90px;
            position: absolute;
            top: 39px;
        }

        .landing-page .upa-f7VZnx {
            background-color: transparent;
            height: 27px;
            letter-spacing: 0.10px;
            line-height: 24px;
            position: relative;
            text-align: right;
            white-space: nowrap;
            width: 77px;
        }

        .landing-page .frame-3-f7VZnx {
            align-items: center;
            background-color: transparent;
            display: inline-flex;
            flex: 0 0 auto;
            gap: 59px;
            position: relative;
        }

        .landing-page .frame-2-gkigS4 {
            align-items: center;
            background-color: transparent;
            display: inline-flex;
            flex: 0 0 auto;
            gap: 17px;
            position: relative;
        }

        .landing-page .home-7SV3zG {
            background-color: transparent;
            height: 27px;
            letter-spacing: 0.10px;
            line-height: 24px;
            margin-top: -1.00px;
            position: relative;
            text-align: right;
            white-space: nowrap;
            width: 119px;
        }

        .landing-page .about-7SV3zG {
            height: 27px;
            margin-top: -1.00px;
            position: relative;
            text-align: right;
            width: 119px;
        }

        .landing-page .schedule-7SV3zG {
            background-color: transparent;
            height: 27px;
            letter-spacing: 0.10px;
            line-height: 24px;
            margin-top: -1.00px;
            position: relative;
            text-align: right;
            white-space: nowrap;
            width: 169px;
        }

        .landing-page .tutorial-7SV3zG {
            height: 27px;
            margin-top: -1.00px;
            position: relative;
            text-align: right;
            width: 147px;
        }

        .landing-page .score-7SV3zG {
            background-color: transparent;
            height: 27px;
            letter-spacing: 0.10px;
            line-height: 24px;
            margin-top: -1.00px;
            position: relative;
            text-align: right;
            white-space: nowrap;
            width: 111px;
        }

        .landing-page .button-signup-gkigS4 {
            background-color: transparent;
            height: 61px;
            margin-right: -2.00px;
            position: relative;
            width: 166px;
        }

        .landing-page .rectangle-2-Y0KsCQ {
            height: 61px;
            left: 0px;
            width: 164px;
        }

        .landing-page .sign-up-Y0KsCQ {
            background-color: transparent;
            color: var(--light--ffffff);
            font-family: var(--font-family-roboto);
            font-size: var(--font-size-l);
            font-style: normal;
            font-weight: 400;
            height: auto;
            left: 22px;
            letter-spacing: 0.10px;
            line-height: 24px;
            position: absolute;
            text-align: right;
            top: 17px;
            white-space: nowrap;
            width: 115px;
        }

        .landing-page .button-login-0MUxxh {
            height: 61px;
            left: 80px;
            top: 568px;
            width: 166px;
        }

        .landing-page .rectangle-2-wxQe71 {
            height: 61px;
            left: 0px;
            width: 164px;
        }

        .landing-page .log-in-wxQe71 {
            background-color: transparent;
            color: var(--light--ffffff);
            font-family: var(--font-family-roboto);
            font-size: var(--font-size-l);
            font-style: normal;
            font-weight: 400;
            height: auto;
            left: 25px;
            letter-spacing: 0.10px;
            line-height: 24px;
            position: absolute;
            text-align: center;
            top: 17px;
            white-space: nowrap;
            width: 115px;
        }

        .landing-page .rise-your-journey-an-0MUxxh {
            background-color: transparent;
            color: transparent;
            font-family: var(--font-family-roboto);
            font-size: var(--font-size-xl);
            font-style: normal;
            font-weight: 900;
            height: auto;
            left: 90px;
            letter-spacing: -1.00px;
            line-height: 47px;
            position: absolute;
            text-align: left;
            top: 214px;
            width: 561px;
        }

        .landing-page .span0-bHcXCT {
            font-style: normal;
            letter-spacing: -0.40px;
        }

        .landing-page .span1-bHcXCT {
            letter-spacing: -0.40px;
        }

        .landing-page .span2-bHcXCT {
            font-style: normal;
            letter-spacing: -0.40px;
        }

        .landing-page .through-technology-a-0MUxxh {
            background-color: transparent;
            color: var(--light--ffffff);
            font-family: var(--font-family-roboto);
            font-size: var(--font-size-m);
            font-style: normal;
            font-weight: 300;
            height: auto;
            left: 90px;
            letter-spacing: 0.00px;
            line-height: 31px;
            position: absolute;
            text-align: left;
            top: 415px;
            width: 529px;
        }

        .landing-page .overlay-anak-anak-0MUxxh {
            background-color: transparent;
            height: 908px;
            left: 786px;
            position: absolute;
            top: -143px;
            width: 545px;
        }

        .landing-page .rectangle-3-D0fsea {
            background-color: transparent;
            height: 564px;
            left: -7px;
            position: absolute;
            top: 351px;
            width: 560px;
        }

        .landing-page .azkiyah_cl89-removebg-preview-1-D0fsea {
            background-color: transparent;
            height: 764px;
            left: 0px;
            position: absolute;
            top: 143px;
            width: 545px;
        }

        .landing-page .overlay-photo-0MUxxh {
            height: 82px;
            left: 662px;
            top: 544px;
            width: 272px;
        }

        .landing-page .rectangle-4-7EUKzT {
            height: 82px;
            width: 270px;
        }

        .landing-page .certificate-check-svgrepo-com-1-7EUKzT {
            background-color: transparent;
            height: 21px;
            left: 27px;
            object-fit: cover;
            position: absolute;
            top: 20px;
            width: 21px;
        }

        .landing-page .credible-website-7EUKzT {
            background-color: transparent;
            color: var(--black);
            font-family: var(--font-family-roboto);
            font-size: var(--font-size-xs);
            font-style: normal;
            font-weight: 900;
            height: auto;
            left: 27px;
            letter-spacing: 1.00px;
            line-height: 16px;
            position: absolute;
            text-align: left;
            top: 46px;
            width: 192px;
        }

        .landing-page .overlay-photo-gwJAt7 {
            height: 98px;
            left: 1179px;
            top: 148px;
            width: 245px;
        }

        .landing-page .rectangle-4-pSC1ek {
            height: 98px;
            width: 243px;
        }

        .landing-page .help-you-to-rise-you-pSC1ek {
            background-color: transparent;
            color: var(--black);
            font-family: var(--font-family-roboto);
            font-size: 11px;
            font-style: normal;
            font-weight: 900;
            height: auto;
            left: 20px;
            letter-spacing: 1.00px;
            line-height: 16px;
            position: absolute;
            text-align: left;
            top: 41px;
            width: 184px;
        }

        .landing-page .graduation-hat-svgrepo-com-1-pSC1ek {
            background-color: transparent;
            height: 18px;
            left: 20px;
            object-fit: cover;
            position: absolute;
            top: 19px;
            width: 18px;
        }

        .landing-page .toeic-exam-easier-wi-0MUxxh {
            background-color: transparent;
            color: var(--black);
            font-family: var(--font-family-roboto);
            font-size: var(--font-size-m);
            font-style: normal;
            font-weight: 400;
            height: auto;
            left: 83px;
            letter-spacing: 2.00px;
            line-height: 35px;
            position: absolute;
            text-align: left;
            top: 1325px;
            width: 598px;
        }

        .landing-page .start-your-journey-t-0MUxxh {
            background-color: transparent;
            height: auto;
            left: 203px;
            letter-spacing: 0.00px;
            line-height: 28px;
            position: absolute;
            text-align: left;
            top: 1491px;
            width: 390px;
        }

        .landing-page .book-open-svgrepo-com-1-0MUxxh {
            background-color: transparent;
            height: 78px;
            left: 80px;
            object-fit: cover;
            position: absolute;
            top: 1492px;
            width: 78px;
        }

        .landing-page .what-is-upa-polinema-0MUxxh {
            background-color: transparent;
            color: transparent;
            font-family: var(--font-family-roboto);
            font-size: var(--font-size-xxl);
            font-style: normal;
            font-weight: 900;
            height: auto;
            left: 83px;
            letter-spacing: 0.00px;
            line-height: 99px;
            position: absolute;
            text-align: left;
            top: 1105px;
            width: 696px;
        }

        .landing-page .span0-78QoDd {
            color: var(--black);
            font-style: normal;
        }

        .landing-page .desktop-4-0MUxxh {
            background-color: #a7caea21;
            height: 204px;
            left: 0px;
            overflow: hidden;
            position: absolute;
            top: 809px;
            width: 1440px;
        }

        .landing-page .train-track-svgrepo-com-1-kmZKHK {
            background-color: transparent;
            height: 204px;
            left: 0px;
            object-fit: cover;
            position: absolute;
            top: 0px;
            width: 1440px;
        }

        .landing-page .frame-6-kmZKHK {
            align-items: center;
            background-color: transparent;
            display: inline-flex;
            left: 132px;
            position: absolute;
            top: 31px;
        }

        .landing-page .frame-5-c1x9Zf {
            align-items: center;
            background-color: transparent;
            display: inline-flex;
            flex: 0 0 auto;
            gap: 342px;
            position: relative;
        }

        .landing-page .dollar-circle-list-svgrepo-com-xD6TJZ {
            background-color: transparent;
            height: 71px;
            object-fit: cover;
            position: relative;
            width: 71px;
        }

        .landing-page .clock-lines-svgrepo-com-xD6TJZ {
            background-color: transparent;
            height: 71px;
            object-fit: cover;
            position: relative;
            width: 71px;
        }

        .landing-page .gauge-max-svgrepo-com-1-xD6TJZ {
            background-color: transparent;
            height: 71px;
            object-fit: cover;
            position: relative;
            width: 71px;
        }

        .landing-page .realtime-score-c1x9Zf {
            background-color: transparent;
            height: 45px;
            letter-spacing: -1.00px;
            line-height: 47px;
            position: relative;
            text-align: left;
            white-space: nowrap;
            width: 302px;
        }

        .landing-page .fastest-payment-c1x9Zf {
            background-color: transparent;
            height: auto;
            left: 71px;
            letter-spacing: -1.00px;
            line-height: 47px;
            position: absolute;
            text-align: center;
            top: 12px;
            white-space: nowrap;
            width: 248px;
        }

        .landing-page .fastest-registration-c1x9Zf {
            background-color: transparent;
            height: auto;
            left: 485px;
            letter-spacing: -1.00px;
            line-height: 47px;
            position: absolute;
            text-align: center;
            top: 12px;
            white-space: nowrap;
            width: 278px;
        }

        .landing-page .toeic-payment-online-kmZKHK {
            background-color: transparent;
            height: auto;
            left: 213px;
            letter-spacing: -1.00px;
            line-height: 16px;
            position: absolute;
            text-align: left;
            top: 96px;
            width: 241px;
        }

        .landing-page .your-toeic-score-ava-kmZKHK {
            background-color: transparent;
            height: auto;
            left: 1035px;
            letter-spacing: -1.00px;
            line-height: 16px;
            position: absolute;
            text-align: left;
            top: 96px;
            width: 241px;
        }

        .landing-page .register-toeic-online-easy-and-instant-kmZKHK {
            background-color: transparent;
            height: auto;
            left: 622px;
            letter-spacing: -1.00px;
            line-height: 16px;
            position: absolute;
            text-align: left;
            top: 96px;
            width: 241px;
        }

        .landing-page .overlay-2-0MUxxh {
            background-color: transparent;
            height: 637px;
            left: 763px;
            position: absolute;
            top: 932px;
            width: 684px;
        }

        .landing-page .rectangle-8-fyz0wm {
            -webkit-backdrop-filter: blur(18.100000381469727px) brightness(100%);
            backdrop-filter: blur(18.100000381469727px) brightness(100%);
            background-color: #5887b847;
            border-radius: 40px;
            filter: blur(12.800000190734863px);
            ;
            height: 395px;
            left: 27px;
            position: absolute;
            top: 241px;
            transform: rotate(0.24deg);
            width: 557px;
        }

        .landing-page .x-fyz0wm {
            filter: blur(2.9000000953674316px);
            ;
            left: 466px;
            top: 312px;
            transform: rotate(26.72deg);
        }

        .landing-page .x-TRoT8m {
            filter: blur(2.950000047683716px);
            ;
            left: 252px;
            top: 229px;
            transform: rotate(-24.34deg);
        }

        .landing-page .x-KRuc4j {
            filter: blur(1.350000023841858px);
            ;
            left: 440px;
            top: 181px;
            transform: rotate(26.72deg);
        }

        .landing-page .button-login-fyz0wm {
            height: 40px;
            left: 70px;
            top: 526px;
            width: 146px;
        }

        .landing-page .rectangle-2-CoOKrx {
            height: 40px;
            left: 0px;
            width: 144px;
        }

        .landing-page .arrow-up-right-svgrepo-com-1-CoOKrx {
            background-color: transparent;
            height: 38px;
            left: 88px;
            object-fit: cover;
            position: absolute;
            top: 1px;
            width: 38px;
        }

        .landing-page .about-CoOKrx {
            color: var(--light--ffffff);
            font-family: var(--font-family-roboto);
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            height: auto;
            left: 15px;
            position: absolute;
            text-align: center;
            top: 8px;
            width: 90px;
        }

        .landing-page .upscalemedia-transformed-1-fyz0wm {
            background-color: transparent;
            height: 637px;
            left: 0px;
            object-fit: cover;
            position: absolute;
            top: 0px;
            width: 678px;
        }

        .landing-page .line-1-0MUxxh {
            background-color: transparent;
            height: 2px;
            left: 80px;
            object-fit: cover;
            position: absolute;
            top: 1454px;
            width: 600px;
        }

        .landing-page .desktop-5-0MUxxh {
            background-color: #caddf0;
            border-radius: 50px;
            height: 524px;
            left: 35px;
            overflow: hidden;
            position: absolute;
            top: 1672px;
            width: 1371px;
        }

        .landing-page .desktop-7-trX9CZ {
            background-color: var(--alabaster);
            border-radius: 30px;
            height: 178px;
            left: 512px;
            overflow: hidden;
            position: absolute;
            top: -89px;
            transform: rotate(-3.74deg);
            width: 1000px;
        }

        .landing-page .ellipse-1-QJX2v2 {
            background-color: #f3caca;
            border-radius: 23.5px;
            left: 23px;
            top: 76px;
        }

        .landing-page .flexible-and-planned-QJX2v2 {
            left: 126px;
            top: 84px;
            transform: rotate(-0.26deg);
            width: 460px;
        }

        .landing-page .ilham-QJX2v2 {
            left: 90px;
            top: 52px;
        }

        .landing-page .desktop-8-trX9CZ {
            height: 145px;
            left: 563px;
            top: 252px;
        }

        .landing-page .ellipse-1-CEGJiB {
            background-color: #f3caca;
            border-radius: 23.5px;
            left: 29px;
            top: 19px;
        }

        .landing-page .flexible-and-planned-CEGJiB {
            left: 116px;
            top: 45px;
            transform: rotate(-0.26deg);
            width: 460px;
        }

        .landing-page .ilham-CEGJiB {
            left: 119px;
            top: 8px;
        }

        .landing-page .desktop-6-trX9CZ {
            background-color: var(--alabaster);
            border-radius: 30px;
            box-shadow: -3px 77px 98.4000015258789px 4px #00000040;
            height: 201px;
            left: 631px;
            overflow: hidden;
            position: absolute;
            top: 56px;
            transform: rotate(-3.74deg);
            width: 873px;
        }

        .landing-page .ellipse-1-LlxbUT {
            background-color: #ff0000;
            border-radius: 23.5px;
            left: 28px;
            top: 17px;
        }

        .landing-page .flexible-and-planned-LlxbUT {
            left: 129px;
            top: 55px;
            transform: rotate(-0.26deg);
            width: 385px;
        }

        .landing-page .safrizal-LlxbUT {
            background-color: transparent;
            height: auto;
            left: 131px;
            letter-spacing: 0.00px;
            line-height: 32px;
            position: absolute;
            text-align: left;
            top: 20px;
            transform: rotate(-0.26deg);
            width: 121px;
        }

        .landing-page .desktop-8-uDXbRM {
            height: 178px;
            left: 667px;
            top: 373px;
        }

        .landing-page .ellipse-1-u1kxpE {
            background-color: transparent;
            left: 38px;
            top: 18px;
        }

        .landing-page .flexible-and-planned-u1kxpE {
            left: 143px;
            top: 51px;
            transform: rotate(-0.26deg);
            width: 385px;
        }

        .landing-page .ardhio-fatra-u1kxpE {
            background-color: transparent;
            height: auto;
            left: 145px;
            letter-spacing: 0.00px;
            line-height: 32px;
            position: absolute;
            text-align: left;
            top: 16px;
            transform: rotate(-0.26deg);
            width: 151px;
        }

        .landing-page .schedule-trX9CZ {
            background-color: transparent;
            color: var(--black);
            font-family: var(--font-family-roboto);
            font-size: 64px;
            font-style: normal;
            font-weight: 800;
            height: auto;
            left: 65px;
            letter-spacing: 0.00px;
            line-height: 28px;
            position: absolute;
            text-align: left;
            top: 147px;
            width: 289px;
        }

        .landing-page .flexible-and-planned-trX9CZ {
            color: var(--black);
            font-family: var(--font-family-roboto);
            font-size: var(--font-size-m);
            font-style: normal;
            font-weight: 400;
            left: 75px;
            top: 212px;
            width: 289px;
        }

        .landing-page .button-login-trX9CZ {
            height: 40px;
            left: 209px;
            top: 355px;
            width: 281px;
        }

        .landing-page .rectangle-2-xTGuYB {
            height: 40px;
            left: 0px;
            width: 279px;
        }

        .landing-page .go-to-the-schedule-xTGuYB {
            background-color: transparent;
            height: auto;
            left: 18px;
            letter-spacing: 0.10px;
            line-height: 24px;
            position: absolute;
            text-align: center;
            top: 9px;
            white-space: nowrap;
            width: 247px;
        }

        .landing-page .desktop-9-0MUxxh {
            background-color: #e6e6e64c;
            height: 440px;
            left: 0px;
            overflow: hidden;
            position: absolute;
            top: 2274px;
            width: 1440px;
        }

        .landing-page .group-3-3ux7WO {
            background-color: transparent;
            height: 389px;
            left: 19px;
            position: absolute;
            top: 25px;
            width: 591px;
        }

        .landing-page .rectangle-9-G25eUJ {
            left: 0px;
            top: 0px;
        }

        .landing-page .azkiyah-cl171-G25eUJ {
            object-fit: cover;
        }

        .landing-page .azkiyah-cl171-4DmwUC {
            background: linear-gradient(180deg, rgba(0, 0, 0, 0) 37.66406178474426%, rgba(0, 0, 0, 0.800000011920929) 100%);
            border-radius: 20px;
        }

        .landing-page .the-registration-pro-G25eUJ {
            background-color: transparent;
            height: auto;
            left: 267px;
            letter-spacing: 0.00px;
            line-height: 28px;
            position: absolute;
            text-align: left;
            top: 122px;
            width: 303px;
        }

        .landing-page .frame-8-Weldx7 {
            left: 367px;
            top: 312px;
        }

        .landing-page .group-4-3ux7WO {
            background-color: transparent;
            height: 389px;
            left: 645px;
            position: absolute;
            top: 30px;
            width: 601px;
        }

        .landing-page .rectangle-9-l6JcAK {
            left: 0px;
            top: 0px;
        }

        .landing-page .azkiyah-cl137-l6JcAK {
            background-color: transparent;
            height: 362px;
            left: 14px;
            object-fit: cover;
            position: absolute;
            top: 14px;
            width: 241px;
        }

        .landing-page .azkiyah-cl171-l6JcAK {
            background: linear-gradient(180deg, rgba(0, 0, 0, 0) 37.66406178474426%, rgba(0, 0, 0, 0.800000011920929) 100%);
            border-radius: 20px;
        }

        .landing-page .live-exam-results-ca-l6JcAK {
            background-color: transparent;
            height: auto;
            left: 267px;
            letter-spacing: 0.00px;
            line-height: 28px;
            position: absolute;
            text-align: left;
            top: 122px;
            width: 266px;
        }

        .landing-page .frame-8-xXVEIx {
            left: 394px;
            top: 311px;
        }

        .landing-page .text-nama-3ux7WO {
            left: 51px;
            top: 332px;
            width: 176px;
        }

        .landing-page .fitri-cahyaniati-Iwi5xb {
            background-color: transparent;
            height: auto;
            left: 0px;
            letter-spacing: 0.00px;
            line-height: 28px;
            position: absolute;
            text-align: left;
            top: 0px;
            width: 172px;
        }

        .landing-page .text-nama-xwQA2d {
            left: 682px;
            top: 332px;
            width: 190px;
        }

        .landing-page .shabrina-rahmadini-Ll3nzt {
            background-color: transparent;
            height: auto;
            left: 0px;
            letter-spacing: 0.00px;
            line-height: 28px;
            position: absolute;
            text-align: left;
            top: 0px;
            width: 186px;
        }

        .landing-page .rectangle-10-0MUxxh {
            background-color: #d9d9d9;
            height: 340px;
            left: 56px;
            position: absolute;
            top: 3013px;
            width: 340px;
        }

        .landing-page .rectangle-11-0MUxxh {
            background-color: #d9d9d9;
            height: 316px;
            left: 51px;
            position: absolute;
            top: 3037px;
            width: 316px;
        }

        .landing-page .image-1-0MUxxh {
            background-color: transparent;
            height: 681px;
            left: 0px;
            position: absolute;
            top: 2712px;
            width: 1440px;
        }

        .landing-page .rectangle-12-0MUxxh {
            background-color: transparent;
            height: 262px;
            left: 59px;
            position: absolute;
            top: 3064px;
            width: 510px;
        }

        .landing-page .arrow-right-up-svgrepo-com-1-0MUxxh {
            background-color: transparent;
            height: 57px;
            left: 461px;
            object-fit: cover;
            position: absolute;
            top: 3251px;
            width: 57px;
        }

        .landing-page .button-login-gwJAt7 {
            height: 32px;
            left: 85px;
            top: 3265px;
            width: 111px;
        }

        .landing-page .rectangle-2-NlyVMW {
            height: 32px;
            left: 11px;
            width: 87px;
        }

        .landing-page .tutorial-NlyVMW {
            color: var(--light--ffffff);
            font-family: var(--font-family-roboto);
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            height: auto;
            left: 0px;
            position: absolute;
            text-align: center;
            top: 3px;
            width: 109px;
        }

        .landing-page .application-tutorial-0MUxxh {
            background-color: transparent;
            color: var(--black);
            font-family: var(--font-family-roboto);
            font-size: var(--font-size-xl);
            font-style: normal;
            font-weight: 600;
            height: auto;
            left: 91px;
            letter-spacing: 0.00px;
            line-height: 36px;
            position: absolute;
            text-align: left;
            top: 3126px;
            width: 271px;
        }

        .landing-page .rectangle-13-0MUxxh {
            background: linear-gradient(180deg, rgb(31.082552522420883, 77.63377860188484, 126.43750101327896) 0%, rgb(66.58166125416756, 105.7528093457222, 146.81936413049698) 25%, rgb(218.44121932983398, 226.0415866971016, 234.00972872972488) 79.00000214576721%, rgb(255, 255, 255) 92.00000166893005%);
            background-color: transparent;
            height: 333px;
            left: -22px;
            position: absolute;
            top: 3380px;
            width: 1526px;
        }

        .landing-page .contents-2-0MUxxh {
            align-items: flex-start;
            background-color: transparent;
            display: inline-flex;
            flex-direction: column;
            gap: 10px;
            left: 0px;
            padding: 60px 450px;
            position: absolute;
            top: 3393px;
        }

        .landing-page .content-ntxSD0 {
            align-items: center;
            background-color: transparent;
            display: inline-flex;
            flex: 0 0 auto;
            flex-direction: column;
            gap: 32px;
            overflow: hidden;
            position: relative;
        }

        .landing-page .headline-UCMtgh {
            align-items: center;
            background-color: transparent;
            display: inline-flex;
            flex: 0 0 auto;
            flex-direction: column;
            gap: 12px;
            overflow: hidden;
            position: relative;
        }

        .landing-page .tagline-G1Eew3 {
            background-color: transparent;
            color: var(--light--ffffff);
            font-family: var(--font-family-roboto);
            font-size: 16px;
            font-style: normal;
            font-weight: 600;
            letter-spacing: 0.10px;
            line-height: 24px;
            margin-top: -1.00px;
            position: relative;
            text-align: center;
            width: 160px;
        }

        .landing-page .long-headline-to-tur-G1Eew3 {
            background-color: transparent;
            color: var(--light--ffffff);
            font-family: var(--font-family-roboto);
            font-size: var(--font-size-xl);
            font-style: normal;
            font-weight: 600;
            letter-spacing: -0.50px;
            line-height: 48px;
            position: relative;
            text-align: center;
            width: 540px;
        }

        .landing-page .buttons-UCMtgh {
            align-items: center;
            background-color: transparent;
            display: inline-flex;
            flex: 0 0 auto;
            gap: 16px;
            overflow: hidden;
            position: relative;
        }

        .landing-page .buttons-small-primary-active-uwnqyu {
            align-items: center;
            background-color: var(--button--primary);
            border-radius: 30px;
            display: inline-flex;
            flex: 0 0 auto;
            flex-direction: column;
            gap: 10px;
            padding: 6px 10px;
            position: relative;
        }

        .landing-page .label-gln5xC {
            align-items: center;
            background-color: transparent;
            display: inline-flex;
            flex: 0 0 auto;
            gap: 10px;
            padding: 0px 10px;
            position: relative;
        }

        .landing-page .action-dChNq8 {
            background-color: transparent;
            color: var(--light--ffffff);
            font-family: var(--font-family-roboto);
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            letter-spacing: 0.10px;
            line-height: 24px;
            margin-top: -1.00px;
            position: relative;
            text-align: center;
            white-space: nowrap;
            width: fit-content;
        }

        .landing-page .rectangle-14-0MUxxh {
            background-color: var(--light--ffffff);
            height: 399px;
            left: 0px;
            position: absolute;
            top: 3692px;
            width: 1440px;
        }

        .landing-page .upa-polinema-0MUxxh {
            background-color: transparent;
            height: auto;
            left: 88px;
            letter-spacing: 0.00px;
            line-height: 36px;
            position: absolute;
            text-align: left;
            top: 3801px;
            white-space: nowrap;
            width: 212px;
        }

        .landing-page .features-0MUxxh {
            background-color: transparent;
            height: auto;
            left: 445px;
            letter-spacing: 0.00px;
            line-height: 36px;
            position: absolute;
            text-align: left;
            top: 3801px;
            white-space: nowrap;
            width: 212px;
        }

        .landing-page .our-services-0MUxxh {
            background-color: transparent;
            height: auto;
            left: 689px;
            letter-spacing: 0.00px;
            line-height: 36px;
            position: absolute;
            text-align: left;
            top: 3801px;
            white-space: nowrap;
            width: 212px;
        }

        .landing-page .about-us-0MUxxh {
            background-color: transparent;
            height: auto;
            left: 943px;
            letter-spacing: 0.00px;
            line-height: 36px;
            position: absolute;
            text-align: left;
            top: 3801px;
            white-space: nowrap;
            width: 212px;
        }

        .landing-page .contact-us-0MUxxh {
            background-color: transparent;
            height: auto;
            left: 1197px;
            letter-spacing: 0.00px;
            line-height: 36px;
            position: absolute;
            text-align: left;
            top: 3801px;
            white-space: nowrap;
            width: 212px;
        }

        .landing-page .copyright-upapolinema-0MUxxh {
            left: 88px;
        }

        .landing-page .copyright-upapolinema-gwJAt7 {
            left: 445px;
        }

        .landing-page .copyright-upapolinema-JZkvxC {
            left: 689px;
        }

        .landing-page .copyright-upapolinema-o9mxaa {
            left: 943px;
        }

        .landing-page .copyright-upapolinema-vQepBx {
            left: 1197px;
        }

        .landing-page .group-8-0MUxxh {
            background-color: transparent;
            height: 389px;
            left: 2588px;
            position: absolute;
            top: 2308px;
            width: 591px;
        }

        .landing-page .rectangle-9-2ZcDad {
            left: 1408px;
            top: 207px;
        }

        .landing-page .azkiyah-cl158-2ZcDad {
            background-color: transparent;
            height: 361px;
            left: 1422px;
            object-fit: cover;
            position: absolute;
            top: 222px;
            width: 241px;
        }

        .landing-page .azkiyah-cl171-2ZcDad {
            background: linear-gradient(180deg, rgba(0, 0, 0, 0) 37.66406178474426%, rgba(0, 0, 0, 0.800000011920929) 100%);
            border-radius: 20px;
        }

        .landing-page .notifications-via-em-2ZcDad {
            background-color: transparent;
            height: auto;
            left: 267px;
            letter-spacing: 0.00px;
            line-height: 28px;
            position: absolute;
            text-align: left;
            top: 122px;
            width: 302px;
        }

        .landing-page .frame-8-5VSrsm {
            left: 362px;
            top: 312px;
        }

        .landing-page .group-7-0MUxxh {
            background-color: transparent;
            height: 389px;
            left: 1925px;
            position: absolute;
            top: 2308px;
            width: 2182px;
        }

        .landing-page .rectangle-9-valxkd {
            left: 1408px;
            top: 207px;
        }

        .landing-page .azkiyah-cl148-valxkd {
            background-color: transparent;
            height: 361px;
            left: 1422px;
            object-fit: cover;
            position: absolute;
            top: 222px;
            width: 241px;
        }

        .landing-page .azkiyah-cl171-valxkd {
            background: linear-gradient(180deg, rgba(0, 0, 0, 0) 37.66406178474426%, rgba(0, 0, 0, 0.800000011920929) 100%);
            border-radius: 20px;
        }

        .landing-page .the-platform-is-user-valxkd {
            background-color: transparent;
            height: auto;
            left: 267px;
            letter-spacing: 0.00px;
            line-height: 28px;
            position: absolute;
            text-align: left;
            top: 122px;
            width: 255px;
        }

        .landing-page .frame-8-60N13s {
            left: 362px;
            top: 312px;
        }

        .landing-page .text-nama-60N13s {
            left: 42px;
            top: 299px;
            width: 190px;
        }

        .landing-page .hanin-mariam-hqOJSR {
            background-color: transparent;
            height: auto;
            left: 0px;
            letter-spacing: 0.00px;
            line-height: 28px;
            position: absolute;
            text-align: left;
            top: 0px;
            width: 186px;
        }

        .landing-page .text-nama-QewyJ3 {
            left: 705px;
            top: 299px;
            width: 190px;
        }

        .landing-page .karina-32VMls {
            background-color: transparent;
            height: auto;
            left: 0px;
            letter-spacing: 0.00px;
            line-height: 28px;
            position: absolute;
            text-align: left;
            top: 0px;
            width: 186px;
        }

        .landing-page .text-nama-CxM5CH {
            left: 1353px;
            top: 300px;
            width: 206px;
        }

        .landing-page .shabrinna-qotrunnada-acrPSj {
            background-color: transparent;
            height: auto;
            left: 0px;
            letter-spacing: 0.00px;
            line-height: 28px;
            position: absolute;
            text-align: left;
            top: 0px;
            width: 202px;
        }

        .landing-page .text-nama-YNq4kx {
            left: 1980px;
            top: 292px;
            width: 206px;
        }

        .landing-page .azkiya-N4oII1 {
            background-color: transparent;
            height: auto;
            left: 0px;
            letter-spacing: 0.00px;
            line-height: 28px;
            position: absolute;
            text-align: left;
            top: 0px;
            width: 202px;
        }

        .landing-page .group-9-0MUxxh {
            background-color: transparent;
            height: 389px;
            left: 3244px;
            position: absolute;
            top: 2308px;
            width: 591px;
        }

        .landing-page .rectangle-9-fwddpB {
            left: 1408px;
            top: 207px;
        }

        .landing-page .azkiyah-cl152-fwddpB {
            background-color: transparent;
            height: 361px;
            left: 1422px;
            object-fit: cover;
            position: absolute;
            top: 222px;
            width: 241px;
        }

        .landing-page .azkiyah-cl171-fwddpB {
            background: linear-gradient(180deg, rgba(0, 0, 0, 0) 37.66406178474426%, rgba(0, 0, 0, 0.800000011920929) 100%);
            border-radius: 20px;
        }

        .landing-page .uploaded-documents-a-fwddpB {
            background-color: transparent;
            height: auto;
            left: 267px;
            letter-spacing: 0.00px;
            line-height: 28px;
            position: absolute;
            text-align: left;
            top: 122px;
            width: 302px;
        }

        .landing-page .frame-8-LcemJb {
            left: 362px;
            top: 312px;
        }

        .landing-page .group-10-0MUxxh {
            background-color: transparent;
            height: 389px;
            left: 3871px;
            position: absolute;
            top: 2308px;
            width: 591px;
        }

        .landing-page .rectangle-9-FblKd2 {
            left: 1408px;
            top: 207px;
        }

        .landing-page .azkiyah-cl164-FblKd2 {
            background-color: transparent;
            height: 361px;
            left: 1422px;
            object-fit: cover;
            position: absolute;
            top: 222px;
            width: 241px;
        }

        .landing-page .azkiyah-cl171-FblKd2 {
            background: linear-gradient(180deg, rgba(0, 0, 0, 0) 37.66406178474426%, rgba(0, 0, 0, 0.800000011920929) 100%);
            border-radius: 20px;
        }

        .landing-page .with-this-system-i-c-FblKd2 {
            background-color: transparent;
            height: auto;
            left: 267px;
            letter-spacing: 0.00px;
            line-height: 28px;
            position: absolute;
            text-align: left;
            top: 122px;
            width: 302px;
        }

        .landing-page .frame-8-v5tnFx {
            left: 362px;
            top: 312px;
        }

        .landing-page .about {
            background-color: transparent;
            letter-spacing: 0.10px;
            line-height: 24px;
            white-space: nowrap;
        }

        .landing-page .azkiyah-cl171 {
            background-color: transparent;
            height: 362px;
            left: 14px;
            position: absolute;
            top: 14px;
            width: 241px;
        }

        .landing-page .button-login {
            background-color: transparent;
            position: absolute;
        }

        .landing-page .copyright-upapolinema {
            background-color: transparent;
            height: auto;
            letter-spacing: 0.00px;
            line-height: 36px;
            position: absolute;
            text-align: left;
            top: 3837px;
            white-space: nowrap;
            width: 212px;
        }

        .landing-page .desktop-8 {
            background-color: var(--alabaster);
            border-radius: 30px;
            overflow: hidden;
            position: absolute;
            transform: rotate(-3.74deg);
            width: 1000px;
        }

        .landing-page .ellipse-1 {
            height: 47px;
            position: absolute;
            transform: rotate(3.74deg);
            width: 47px;
        }

        .landing-page .flexible-and-planned {
            background-color: transparent;
            height: auto;
            letter-spacing: 0.00px;
            line-height: 32px;
            position: absolute;
            text-align: left;
        }

        .landing-page .frame-7 {
            align-items: center;
            align-self: stretch;
            background-color: transparent;
            display: flex;
            flex: 0 0 auto;
            gap: 3px;
            position: relative;
            width: 100%;
        }

        .landing-page .frame-8 {
            align-items: flex-start;
            background-color: transparent;
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding: 10px;
            position: absolute;
            width: 207px;
        }

        .landing-page .group-2 {
            background-color: transparent;
            height: 389px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 593px;
        }

        .landing-page .ilham {
            background-color: transparent;
            height: auto;
            letter-spacing: 0.00px;
            line-height: 32px;
            position: absolute;
            text-align: left;
            transform: rotate(-0.26deg);
            width: 121px;
        }

        .landing-page .overlay-photo {
            background-color: transparent;
            position: absolute;
        }

        .landing-page .polinema-student {
            background-color: transparent;
            height: auto;
            left: 0px;
            letter-spacing: 0.00px;
            line-height: 28px;
            position: absolute;
            text-align: left;
            top: 20px;
            white-space: nowrap;
            width: 97px;
        }

        .landing-page .rectangle-2 {
            background-color: transparent;
            position: absolute;
            top: 0px;
        }

        .landing-page .rectangle-4 {
            -webkit-backdrop-filter: blur(14.199999809265137px) brightness(100%);
            backdrop-filter: blur(14.199999809265137px) brightness(100%);
            background-color: #ffffff6e;
            border-radius: 30px;
            filter: blur(11.5px);
            ;
            left: 0px;
            position: absolute;
            top: 0px;
        }

        .landing-page .rectangle-9 {
            background-color: transparent;
            height: 389px;
            position: absolute;
            width: 591px;
        }

        .landing-page .span1 {
            color: var(--midnight-blue);
            font-style: normal;
        }

        .landing-page .star-svgrepo-com-1 {
            background-color: transparent;
            height: 35px;
            object-fit: cover;
            position: relative;
            width: 35px;
        }

        .landing-page .star-svgrepo-com-2 {
            background-color: transparent;
            height: 35px;
            object-fit: cover;
            position: relative;
            width: 35px;
        }

        .landing-page .star-svgrepo-com-3 {
            background-color: transparent;
            height: 35px;
            object-fit: cover;
            position: relative;
            width: 35px;
        }

        .landing-page .star-svgrepo-com-4 {
            background-color: transparent;
            height: 35px;
            object-fit: cover;
            position: relative;
            width: 35px;
        }

        .landing-page .star-svgrepo-com-5 {
            background-color: transparent;
            height: 35px;
            object-fit: cover;
            position: relative;
            width: 35px;
        }

        .landing-page .text-nama {
            background-color: transparent;
            height: 46px;
            position: absolute;
        }

        .landing-page .tutorial {
            background-color: transparent;
            letter-spacing: 0.10px;
            line-height: 24px;
            white-space: nowrap;
        }

        .landing-page .x {
            background-color: transparent;
            height: auto;
            letter-spacing: 0.00px;
            line-height: 99px;
            position: absolute;
            text-align: left;
            white-space: nowrap;
            width: 42px;
        }
    </style>
</head>

<body style="margin: 0;background: #ffffff;"><input type="hidden" id="anPageName" name="page" value="landing-page">
    <div class="container-center-horizontal">
        <div class="landing-page screen " data-id="2:2"><img class="desktop-2-0MUxxh" data-id="9:399"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9d65247d597895fdf751/img/desktop---2-1.jpg"
                alt="Desktop - 2">
            <div class="frame-4-0MUxxh" data-id="17:144">
                <div class="upa-f7VZnx roboto-black-white-40px" data-id="8:398">UPA</div>
                <div class="frame-3-f7VZnx" data-id="17:143">
                    <div class="frame-2-gkigS4" data-id="17:142">
                        <div class="home-7SV3zG roboto-normal-white-24px" data-id="17:130">Home</div>
                        <div class="about-7SV3zG about roboto-normal-white-24px" data-id="17:132">About</div>
                        <div class="schedule-7SV3zG roboto-normal-white-24px" data-id="17:133">Schedule</div>
                        <div class="tutorial-7SV3zG tutorial roboto-normal-white-24px" data-id="17:134"> Tutorial</div>
                        <div class="score-7SV3zG roboto-normal-white-24px" data-id="17:135">Score</div>
                    </div>
                    <div class="button-signup-gkigS4" data-id="17:139"><img class="rectangle-2-Y0KsCQ rectangle-2"
                            data-id="17:136"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9d65247d597895fdf751/img/rectangle-2-5.svg"
                            alt="Rectangle 2">
                        <div class="sign-up-Y0KsCQ" data-id="17:138">Sign Up</div>
                    </div>
                </div>
            </div>
            <div class="button-login-0MUxxh button-login" data-id="18:152"><img class="rectangle-2-wxQe71 rectangle-2"
                    data-id="18:153"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                    anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9d65247d597895fdf751/img/rectangle-2-5.svg"
                    alt="Rectangle 2">
                <div class="log-in-wxQe71" data-id="18:154">Log In</div>
            </div>
            <p class="rise-your-journey-an-0MUxxh" data-id="18:149"><span
                    class="span0-bHcXCT roboto-black-white-40px">Rise Your </span><span
                    class="span1-bHcXCT span1">#Journey</span><span class="span2-bHcXCT roboto-black-white-40px"> And
                    Unlock Global opportunities with proven<br>Business English-language Proficiency.</span></p>
            <p class="through-technology-a-0MUxxh" data-id="18:150">Through Technology and Collaboration, We Deliver a
                Seamless Experience.</p>
            <div class="overlay-anak-anak-0MUxxh" data-id="17:148"><img class="rectangle-3-D0fsea" data-id="17:146"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                    anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9d65247d597895fdf751/img/rectangle-3-1.svg"
                    alt="Rectangle 3"><img class="azkiyah_cl89-removebg-preview-1-D0fsea" data-id="17:145"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                    anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9d65247d597895fdf751/img/azkiyah-cl89-removebg-preview-1-1.png"
                    alt="AZKIYAH_CL89-removebg-preview 1"></div>
            <div class="overlay-photo-0MUxxh overlay-photo" data-id="22:159">
                <div class="rectangle-4-7EUKzT rectangle-4" data-id="21:155"></div><img
                    class="certificate-check-svgrepo-com-1-7EUKzT" data-id="22:157"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                    anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9d65247d597895fdf751/img/certificate-check-svgrepo-com-1-1.png"
                    alt="certificate-check-svgrepo-com 1">
                <div class="credible-website-7EUKzT" data-id="21:156">Credible Website</div>
            </div>
            <div class="overlay-photo-gwJAt7 overlay-photo" data-id="22:160">
                <div class="rectangle-4-pSC1ek rectangle-4" data-id="22:161"></div>
                <p class="help-you-to-rise-you-pSC1ek" data-id="22:163">Help You To Rise Your Succesfull Around The
                    World</p><img class="graduation-hat-svgrepo-com-1-pSC1ek" data-id="23:164"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                    anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9d65247d597895fdf751/img/graduation-hat-svgrepo-com-1-1.png"
                    alt="graduation-hat-svgrepo-com 1">
            </div>
            <p class="toeic-exam-easier-wi-0MUxxh" data-id="29:763">TOEIC exam easier with Polinema Integrated System
                – quick register, Instant Pay, Real-Time results!</p>
            <p class="start-your-journey-t-0MUxxh roboto-semi-bold-black-24px" data-id="32:768">Start your journey to
                Global success with TOEIC-all in one easy and reliable Platform.</p><img
                class="book-open-svgrepo-com-1-0MUxxh" data-id="32:769"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/book-open-svgrepo-com-1.png"
                alt="book-open-svgrepo-com 1">
            <h1 class="what-is-upa-polinema-0MUxxh" data-id="28:762"><span class="span0-78QoDd">What Is
                    <br></span><span class="span1">UPA Polinema?</span></h1>
            <div class="desktop-4-0MUxxh" data-id="24:125"><img class="train-track-svgrepo-com-1-kmZKHK"
                    data-id="32:767"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                    anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/train-track-svgrepo-com-1.png"
                    alt="train-track-svgrepo-com 1">
                <div class="frame-6-kmZKHK" data-id="26:758">
                    <div class="frame-5-c1x9Zf" data-id="26:754"><img class="dollar-circle-list-svgrepo-com-xD6TJZ"
                            data-id="26:752"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/dollar-circle-list-svgrepo-com.png"
                            alt="dollar-circle-list-svgrepo-com"><img class="clock-lines-svgrepo-com-xD6TJZ"
                            data-id="26:751"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/clock-lines-svgrepo-com.png"
                            alt="clock-lines-svgrepo-com"><img class="gauge-max-svgrepo-com-1-xD6TJZ"
                            data-id="26:753"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/gauge-max-svgrepo-com-1.png"
                            alt="gauge-max-svgrepo-com 1"></div>
                    <div class="realtime-score-c1x9Zf roboto-black-black-32px" data-id="26:757"> Realtime Score</div>
                    <div class="fastest-payment-c1x9Zf roboto-black-black-32px" data-id="26:755">Fastest Payment</div>
                    <div class="fastest-registration-c1x9Zf roboto-black-black-32px" data-id="26:756">Fastest
                        Registration</div>
                </div>
                <p class="toeic-payment-online-kmZKHK roboto-black-black-15px" data-id="26:759">TOEIC payment Online,
                    Fast and without complicated.</p>
                <p class="your-toeic-score-ava-kmZKHK roboto-black-black-15px" data-id="27:761">Your TOEIC score,
                    available in Real-time, anytime, anywhere.</p>
                <p class="register-toeic-online-easy-and-instant-kmZKHK roboto-black-black-15px" data-id="26:760">
                    Register TOEIC Online, Easy and instant.</p>
            </div>
            <div class="overlay-2-0MUxxh" data-id="45:851">
                <div class="rectangle-8-fyz0wm" data-id="32:771"></div>
                <div class="x-fyz0wm x robotocondensed-extra-bold-midnight-blue-87px" data-id="45:856">?</div>
                <div class="x-TRoT8m x robotocondensed-extra-bold-midnight-blue-87px" data-id="45:853">?</div>
                <div class="x-KRuc4j x robotocondensed-extra-bold-midnight-blue-87px" data-id="45:855">?</div>
                <div class="button-login-fyz0wm button-login" data-id="46:858"><img
                        class="rectangle-2-CoOKrx rectangle-2" data-id="46:859"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                        anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/rectangle-2.svg"
                        alt="Rectangle 2"><img class="arrow-up-right-svgrepo-com-1-CoOKrx" data-id="46:861"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                        anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/arrow-up-right-svgrepo-com-1.png"
                        alt="arrow-up-right-svgrepo-com 1">
                    <div class="about-CoOKrx about" data-id="46:860">About</div>
                </div><img class="upscalemedia-transformed-1-fyz0wm" data-id="64:135"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                    anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/upscalemedia-transformed-1.png"
                    alt="upscalemedia-transformed 1">
            </div><img class="line-1-0MUxxh" data-id="45:852"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/line-1.svg"
                alt="Line 1">
            <div class="desktop-5-0MUxxh" data-id="46:862">
                <div class="desktop-7-trX9CZ" data-id="47:864">
                    <div class="ellipse-1-QJX2v2 ellipse-1" data-id="47:878"></div>
                    <p class="flexible-and-planned-QJX2v2 flexible-and-planned roboto-light-black-24px"
                        data-id="47:884">Flexible and planned TOEIC exam schedule – and customize by campus</p>
                    <div class="ilham-QJX2v2 ilham roboto-extra-bold-black-24px" data-id="47:885">ILHAM</div>
                </div>
                <div class="desktop-8-trX9CZ desktop-8" data-id="47:865">
                    <div class="ellipse-1-CEGJiB ellipse-1" data-id="47:879"></div>
                    <p class="flexible-and-planned-CEGJiB flexible-and-planned roboto-light-black-24px"
                        data-id="47:882">Flexible and planned TOEIC exam schedule – and customize by campus</p>
                    <div class="ilham-CEGJiB ilham roboto-extra-bold-black-24px" data-id="47:883">ILHAM</div>
                </div>
                <div class="desktop-6-trX9CZ" data-id="47:863">
                    <div class="ellipse-1-LlxbUT ellipse-1" data-id="47:875"></div>
                    <p class="flexible-and-planned-LlxbUT flexible-and-planned roboto-light-black-24px"
                        data-id="47:880">Flexible and planned TOEIC exam schedule – and customize by campus</p>
                    <div class="safrizal-LlxbUT roboto-extra-bold-black-24px" data-id="47:881">SAFRIZAL</div>
                </div>
                <div class="desktop-8-uDXbRM desktop-8" data-id="47:866"><img class="ellipse-1-u1kxpE ellipse-1"
                        data-id="47:876"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                        anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/ellipse-1.svg"
                        alt="Ellipse 1">
                    <p class="flexible-and-planned-u1kxpE flexible-and-planned roboto-light-black-24px"
                        data-id="47:886">Flexible and planned TOEIC exam schedule – and customize by campus</p>
                    <div class="ardhio-fatra-u1kxpE roboto-extra-bold-black-24px" data-id="47:887">Ardhio Fatra</div>
                </div>
                <div class="schedule-trX9CZ" data-id="47:867">Schedule</div>
                <p class="flexible-and-planned-trX9CZ flexible-and-planned" data-id="47:868">Flexible and planned
                    TOEIC exam schedule – and customize by campus</p>
                <div class="button-login-trX9CZ button-login" data-id="47:869"><img
                        class="rectangle-2-xTGuYB rectangle-2" data-id="47:870"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                        anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/rectangle-2-1.svg"
                        alt="Rectangle 2">
                    <div class="go-to-the-schedule-xTGuYB roboto-normal-white-24px" data-id="47:872">Go To The
                        Schedule</div>
                </div>
            </div>
            <div class="desktop-9-0MUxxh" data-id="49:894">
                <div class="group-3-3ux7WO" data-id="50:916">
                    <div class="group-2" data-id="50:908"><img class="rectangle-9-G25eUJ rectangle-9"
                            data-id="47:889"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/rectangle-9.svg"
                            alt="Rectangle 9"><img class="azkiyah-cl171-G25eUJ azkiyah-cl171" data-id="50:903"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/azkiyah-cl171@2x.png"
                            alt="AZKIYAH CL171">
                        <div class="azkiyah-cl171-4DmwUC azkiyah-cl171" data-id="50:904"></div>
                        <p class="the-registration-pro-G25eUJ roboto-semi-bold-black-24px" data-id="50:907">“The
                            registration process is very easy and fast! I can focus on exam preparation without worry.”
                        </p>
                    </div>
                    <div class="frame-8-Weldx7 frame-8" data-id="50:915">
                        <div class="frame-7" data-id="50:914"><img class="star-svgrepo-com-5" data-id="50:913"
                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/star-svgrepo-com-5.png"
                                alt="star-svgrepo-com 5"><img class="star-svgrepo-com-4" data-id="50:912"
                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/star-svgrepo-com-5.png"
                                alt="star-svgrepo-com 4"><img class="star-svgrepo-com-3" data-id="50:911"
                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/star-svgrepo-com-5.png"
                                alt="star-svgrepo-com 3"><img class="star-svgrepo-com-2" data-id="50:910"
                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/star-svgrepo-com-5.png"
                                alt="star-svgrepo-com 2"><img class="star-svgrepo-com-1" data-id="50:909"
                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/star-svgrepo-com-5.png"
                                alt="star-svgrepo-com 1"></div>
                    </div>
                </div>
                <div class="group-4-3ux7WO" data-id="50:917">
                    <div class="group-2" data-id="50:918"><img class="rectangle-9-l6JcAK rectangle-9"
                            data-id="50:919"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/rectangle-9.svg"
                            alt="Rectangle 9"><img class="azkiyah-cl137-l6JcAK" data-id="50:930"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/azkiyah-cl137@2x.png"
                            alt="AZKIYAH CL137">
                        <div class="azkiyah-cl171-l6JcAK azkiyah-cl171" data-id="50:921"></div>
                        <p class="live-exam-results-ca-l6JcAK roboto-semi-bold-black-24px" data-id="50:922">“Live exam
                            results can be viewed in real-time. Very transparent and helpful!.”</p>
                    </div>
                    <div class="frame-8-xXVEIx frame-8" data-id="50:923">
                        <div class="frame-7" data-id="50:924"><img class="star-svgrepo-com-5" data-id="50:925"
                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/star-svgrepo-com-5.png"
                                alt="star-svgrepo-com 5"><img class="star-svgrepo-com-4" data-id="50:926"
                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/star-svgrepo-com-5.png"
                                alt="star-svgrepo-com 4"><img class="star-svgrepo-com-3" data-id="50:927"
                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/star-svgrepo-com-5.png"
                                alt="star-svgrepo-com 3"><img class="star-svgrepo-com-2" data-id="50:928"
                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/star-svgrepo-com-5.png"
                                alt="star-svgrepo-com 2"></div>
                    </div>
                </div>
                <div class="text-nama-3ux7WO text-nama" data-id="50:1022">
                    <div class="fitri-cahyaniati-Iwi5xb roboto-semi-bold-white-20px" data-id="50:1020">Fitri
                        Cahyaniati</div>
                    <div class="polinema-student roboto-thin-white-12px" data-id="50:1021">Polinema Student</div>
                </div>
                <div class="text-nama-xwQA2d text-nama" data-id="50:1023">
                    <div class="shabrina-rahmadini-Ll3nzt roboto-semi-bold-white-20px" data-id="50:1024">Shabrina
                        Rahmadini</div>
                    <div class="polinema-student roboto-thin-white-12px" data-id="50:1025">Polinema Student</div>
                </div>
            </div>
            <div class="rectangle-10-0MUxxh" data-id="51:1052"></div>
            <div class="rectangle-11-0MUxxh" data-id="51:1053"></div><img class="image-1-0MUxxh" data-id="51:1050"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/image-1.png"
                alt="image 1"><img class="rectangle-12-0MUxxh" data-id="51:1054"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/rectangle-12.svg"
                alt="Rectangle 12"><img class="arrow-right-up-svgrepo-com-1-0MUxxh" data-id="51:1058"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/arrow-right-up-svgrepo-com-1.png"
                alt="arrow-right-up-svgrepo-com 1">
            <div class="button-login-gwJAt7 button-login" data-id="51:1089"><img
                    class="rectangle-2-NlyVMW rectangle-2" data-id="51:1090"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                    anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/rectangle-2-2.svg"
                    alt="Rectangle 2">
                <div class="tutorial-NlyVMW tutorial" data-id="51:1091">Tutorial</div>
            </div>
            <div class="application-tutorial-0MUxxh" data-id="51:1092">Application Tutorial</div>
            <div class="rectangle-13-0MUxxh" data-id="52:1141"></div>
            <div class="contents-2-0MUxxh" data-id="52:1093">
                <div class="content-ntxSD0" data-id="52:1094">
                    <div class="headline-UCMtgh" data-id="52:1095">
                        <div class="tagline-G1Eew3" data-id="52:1096">Score</div>
                        <div class="long-headline-to-tur-G1Eew3" data-id="52:1097">Real Time <br>Score Showed</div>
                    </div>
                    <div class="buttons-UCMtgh" data-id="52:1098">
                        <div class="buttons-small-primary-active-uwnqyu" data-id="52:1099">
                            <div class="label-gln5xC" data-id="I52:1099;59:11078">
                                <div class="action-dChNq8 valign-text-middle" data-id="I52:1099;59:11078;0:219">Score
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rectangle-14-0MUxxh" data-id="52:1142"></div>
            <div class="upa-polinema-0MUxxh roboto-bold-midnight-blue-24px" data-id="52:1143">UPA POLINEMA</div>
            <div class="features-0MUxxh roboto-bold-midnight-blue-24px" data-id="52:1145">Features</div>
            <div class="our-services-0MUxxh roboto-bold-midnight-blue-24px" data-id="52:1147">Our Services</div>
            <div class="about-us-0MUxxh roboto-bold-midnight-blue-24px" data-id="52:1149">About Us</div>
            <div class="contact-us-0MUxxh roboto-bold-midnight-blue-24px" data-id="52:1151">Contact Us</div>
            <div class="copyright-upapolinema-0MUxxh copyright-upapolinema roboto-normal-black-13px"
                data-id="52:1144">Copyright UPA.POLINEMA</div>
            <div class="copyright-upapolinema-gwJAt7 copyright-upapolinema roboto-normal-black-13px"
                data-id="52:1146">Copyright UPA.POLINEMA</div>
            <div class="copyright-upapolinema-JZkvxC copyright-upapolinema roboto-normal-black-13px"
                data-id="52:1148">Copyright UPA.POLINEMA</div>
            <div class="copyright-upapolinema-o9mxaa copyright-upapolinema roboto-normal-black-13px"
                data-id="52:1150">Copyright UPA.POLINEMA</div>
            <div class="copyright-upapolinema-vQepBx copyright-upapolinema roboto-normal-black-13px"
                data-id="52:1152">Copyright UPA.POLINEMA</div>
            <div class="group-8-0MUxxh" data-id="70:136">
                <div class="group-2" data-id="70:137"><img class="rectangle-9-2ZcDad rectangle-9" data-id="70:138"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                        anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/rectangle-9-2.png"
                        alt="Rectangle 9"><img class="azkiyah-cl158-2ZcDad" data-id="70:141"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                        anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/azkiyah-cl158@2x.png"
                        alt="AZKIYAH CL158">
                    <div class="azkiyah-cl171-2ZcDad azkiyah-cl171" data-id="70:142"></div>
                    <p class="notifications-via-em-2ZcDad roboto-semi-bold-black-24px" data-id="70:143">“Notifications
                        via Email are very helpful. I have never missed an exam or a schedule.”</p>
                </div>
                <div class="frame-8-5VSrsm frame-8" data-id="70:144">
                    <div class="frame-7" data-id="70:145"><img class="star-svgrepo-com-5" data-id="70:146"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/star-svgrepo-com-5.png"
                            alt="star-svgrepo-com 5"><img class="star-svgrepo-com-3" data-id="70:147"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/star-svgrepo-com-5.png"
                            alt="star-svgrepo-com 3"><img class="star-svgrepo-com-4" data-id="70:148"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/star-svgrepo-com-5.png"
                            alt="star-svgrepo-com 4"><img class="star-svgrepo-com-2" data-id="70:149"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/star-svgrepo-com-5.png"
                            alt="star-svgrepo-com 2"><img class="star-svgrepo-com-1" data-id="70:150"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/star-svgrepo-com-5.png"
                            alt="star-svgrepo-com 1"></div>
                </div>
            </div>
            <div class="group-7-0MUxxh" data-id="70:151">
                <div class="group-2" data-id="70:152"><img class="rectangle-9-valxkd rectangle-9" data-id="70:153"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                        anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/rectangle-9-2.png"
                        alt="Rectangle 9"><img class="azkiyah-cl148-valxkd" data-id="70:156"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                        anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/azkiyah-cl158@2x.png"
                        alt="AZKIYAH CL148">
                    <div class="azkiyah-cl171-valxkd azkiyah-cl171" data-id="70:157"></div>
                    <p class="the-platform-is-user-valxkd roboto-semi-bold-black-24px" data-id="70:158">“The platform
                        is user-friendly, even for the not very tech-savvy like me.”</p>
                </div>
                <div class="frame-8-60N13s frame-8" data-id="70:159">
                    <div class="frame-7" data-id="70:160"><img class="star-svgrepo-com-5" data-id="70:161"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/star-svgrepo-com-5.png"
                            alt="star-svgrepo-com 5"><img class="star-svgrepo-com-3" data-id="70:162"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/star-svgrepo-com-5.png"
                            alt="star-svgrepo-com 3"><img class="star-svgrepo-com-4" data-id="70:163"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/star-svgrepo-com-5.png"
                            alt="star-svgrepo-com 4"><img class="star-svgrepo-com-2" data-id="70:164"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/star-svgrepo-com-5.png"
                            alt="star-svgrepo-com 2"><img class="star-svgrepo-com-1" data-id="70:165"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/star-svgrepo-com-5.png"
                            alt="star-svgrepo-com 1"></div>
                </div>
                <div class="text-nama-60N13s text-nama" data-id="70:166">
                    <div class="hanin-mariam-hqOJSR roboto-semi-bold-white-20px" data-id="70:167">Hanin Mariam</div>
                    <div class="polinema-student roboto-thin-white-12px" data-id="70:168">Polinema Student</div>
                </div>
                <div class="text-nama-QewyJ3 text-nama" data-id="70:169">
                    <div class="karina-32VMls roboto-semi-bold-white-20px" data-id="70:170">Karina</div>
                    <div class="polinema-student roboto-thin-white-12px" data-id="70:171">Polinema Student</div>
                </div>
                <div class="text-nama-CxM5CH text-nama" data-id="70:172">
                    <div class="shabrinna-qotrunnada-acrPSj roboto-semi-bold-white-20px" data-id="70:173">Shabrinna
                        Qotrunnada</div>
                    <div class="polinema-student roboto-thin-white-12px" data-id="70:174">Polinema Student</div>
                </div>
                <div class="text-nama-YNq4kx text-nama" data-id="70:175">
                    <div class="azkiya-N4oII1 roboto-semi-bold-white-20px" data-id="70:176">Azkiya</div>
                    <div class="polinema-student roboto-thin-white-12px" data-id="70:177">Polinema Student</div>
                </div>
            </div>
            <div class="group-9-0MUxxh" data-id="70:178">
                <div class="group-2" data-id="70:179"><img class="rectangle-9-fwddpB rectangle-9" data-id="70:180"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                        anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/rectangle-9-2.png"
                        alt="Rectangle 9"><img class="azkiyah-cl152-fwddpB" data-id="70:183"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                        anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/azkiyah-cl158@2x.png"
                        alt="AZKIYAH CL152">
                    <div class="azkiyah-cl171-fwddpB azkiyah-cl171" data-id="70:184"></div>
                    <p class="uploaded-documents-a-fwddpB roboto-semi-bold-black-24px" data-id="70:185">“Uploaded
                        documents are safe and well organized. No need to worry about data loss.”</p>
                </div>
                <div class="frame-8-LcemJb frame-8" data-id="70:186">
                    <div class="frame-7" data-id="70:187"><img class="star-svgrepo-com-5" data-id="70:188"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/star-svgrepo-com-5.png"
                            alt="star-svgrepo-com 5"><img class="star-svgrepo-com-3" data-id="70:189"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/star-svgrepo-com-5.png"
                            alt="star-svgrepo-com 3"><img class="star-svgrepo-com-4" data-id="70:190"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/star-svgrepo-com-5.png"
                            alt="star-svgrepo-com 4"><img class="star-svgrepo-com-2" data-id="70:191"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/star-svgrepo-com-5.png"
                            alt="star-svgrepo-com 2"><img class="star-svgrepo-com-1" data-id="70:192"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/star-svgrepo-com-5.png"
                            alt="star-svgrepo-com 1"></div>
                </div>
            </div>
            <div class="group-10-0MUxxh" data-id="70:193">
                <div class="group-2" data-id="70:194"><img class="rectangle-9-FblKd2 rectangle-9" data-id="70:195"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                        anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/rectangle-9-2.png"
                        alt="Rectangle 9"><img class="azkiyah-cl164-FblKd2" data-id="70:198"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                        anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/azkiyah-cl158@2x.png"
                        alt="AZKIYAH CL164">
                    <div class="azkiyah-cl171-FblKd2 azkiyah-cl171" data-id="70:199"></div>
                    <p class="with-this-system-i-c-FblKd2 roboto-semi-bold-black-24px" data-id="70:200">“With this
                        system, I can manage the exam schedule according to my busy schedule. Very flexible!</p>
                </div>
                <div class="frame-8-v5tnFx frame-8" data-id="70:201">
                    <div class="frame-7" data-id="70:202"><img class="star-svgrepo-com-5" data-id="70:203"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/star-svgrepo-com-5.png"
                            alt="star-svgrepo-com 5"><img class="star-svgrepo-com-3" data-id="70:204"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/star-svgrepo-com-5.png"
                            alt="star-svgrepo-com 3"><img class="star-svgrepo-com-4" data-id="70:205"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/star-svgrepo-com-5.png"
                            alt="star-svgrepo-com 4"><img class="star-svgrepo-com-2" data-id="70:206"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/star-svgrepo-com-5.png"
                            alt="star-svgrepo-com 2"><img class="star-svgrepo-com-1" data-id="70:207"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/67be9b3854cff5b13984a764/releases/67be9b7ec088876c7693f969/img/star-svgrepo-com-5.png"
                            alt="star-svgrepo-com 1"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="launchpad-js/launchpad-banner.js" async></script>
    <script defer src="https://animaapp.s3.amazonaws.com/static/restart-btn.min.js"></script>
</body>

</html>
