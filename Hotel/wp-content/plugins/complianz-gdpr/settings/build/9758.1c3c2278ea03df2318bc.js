"use strict";(globalThis.webpackChunkcomplianz_gdpr=globalThis.webpackChunkcomplianz_gdpr||[]).push([[9758,9091],{99091:(e,t,a)=>{a.r(t),a.d(t,{UseCookieScanData:()=>i});var o=a(81621),n=a(9588);const i=(0,o.vt)(((e,t)=>({initialLoadCompleted:!1,setInitialLoadCompleted:t=>e({initialLoadCompleted:t}),iframeLoaded:!1,loading:!1,nextPage:!1,progress:0,cookies:[],lastLoadedIframe:"",setIframeLoaded:t=>e({iframeLoaded:t}),setLastLoadedIframe:t=>e((e=>({lastLoadedIframe:t}))),setProgress:t=>e({progress:t}),fetchProgress:()=>(e({loading:!0}),n.doAction("get_scan_progress",{}).then((t=>(e({initialLoadCompleted:!0,loading:!1,nextPage:t.next_page,progress:t.progress,cookies:t.cookies}),t))))})))},79758:(e,t,a)=>{a.r(t),a.d(t,{default:()=>c});var o=a(86087),n=a(9588),i=a(4219),s=a(52043),r=a(56427),l=a(99091),d=a(32828);const c=(0,o.memo)((({type:e="action",style:t="tertiary",label:a,onClick:c,href:m="",target:g="",disabled:u,action:p,field:f,children:C})=>{if(!a&&!C)return null;const b=(f&&f.button_text?f.button_text:a)||C,{fetchFieldsData:h,showSavedSettingsNotice:_}=(0,i.default)(),{setInitialLoadCompleted:L,setProgress:k}=(0,l.UseCookieScanData)(),{setProgressLoaded:w}=(0,d.default)(),{selectedSubMenuItem:v}=(0,s.default)(),[x,I]=(0,o.useState)(!1),y=`button cmplz-button button--${t} button-${e}`,D=async e=>{await n.doAction(f.action,{}).then((e=>{e.success&&(h(v),"reset_settings"===e.id&&(L(!1),k(0),w(!1)),_(e.message))}))},P=f&&f.warn?f.warn:"";return"action"===e?(0,o.createElement)(o.Fragment,null,r.__experimentalConfirmDialog&&(0,o.createElement)(r.__experimentalConfirmDialog,{isOpen:x,onConfirm:async()=>{I(!1),await D()},onCancel:()=>{I(!1)}},P),(0,o.createElement)("button",{className:y,onClick:async t=>{if("action"!==e||!c)return"action"===e&&p?r.__experimentalConfirmDialog?void(f&&f.warn?I(!0):await D()):void await D():void(window.location.href=f.url);c(t)},disabled:u},b)):"link"===e?(0,o.createElement)("a",{className:y,href:m,target:g},b):void 0}))}}]);