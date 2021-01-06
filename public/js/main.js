!function(e){var a={};function n(t){if(a[t])return a[t].exports;var r=a[t]={i:t,l:!1,exports:{}};return e[t].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=e,n.c=a,n.d=function(e,a,t){n.o(e,a)||Object.defineProperty(e,a,{enumerable:!0,get:t})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,a){if(1&a&&(e=n(e)),8&a)return e;if(4&a&&"object"==typeof e&&e&&e.__esModule)return e;var t=Object.create(null);if(n.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:e}),2&a&&"string"!=typeof e)for(var r in e)n.d(t,r,function(a){return e[a]}.bind(null,r));return t},n.n=function(e){var a=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(a,"a",a),a},n.o=function(e,a){return Object.prototype.hasOwnProperty.call(e,a)},n.p="/",n(n.s=168)}({168:function(e,a,n){e.exports=n(169)},169:function(e,a){$(document).ready((function(){function e(e){return(e+"").replace(/^(.)|\s+(.)/g,(function(e){return e.toUpperCase()}))}function a(e,a,n){"info"==n?$.growl.info({title:e,message:a}):"success"==n?$.growl.success({title:e,message:a}):"error"==n&&$.growl.error({title:e,message:a})}if($("#dt_user").length){var n=$("#dt_user").DataTable({processing:!0,serverSide:!0,ajax:baseURL+"/data/user",order:[[0,"desc"]],language:{processing:'<div class="circle-inner"></div>'},columns:[{data:"id",visible:!1,searchable:!1},{data:"name"},{data:"gender",searchable:!0,orderable:!1,render:function(e,a,n){return"F"==e?"Female":"Male"}},{data:"address",orderable:!1,searchable:!1,render:function(e,a,n){return""==e?"-":e}},{data:"phone",orderable:!1,searchable:!1,render:function(e,a,n){return""==e?"-":e}},{data:"email"},{data:"last_login",render:function(e,a,n){return e?moment(e,"YYYYMMDD").fromNow():"-"},searchable:!1},{data:"id",render:function(e,a,n){return'<button type="button" class="btn btn-info " id="'+e+'">Edit</button>'},searchable:!1}]});$("#btnSave").on("click",(function(e){e.preventDefault(),$.ajax({type:"POST",url:route("update_user"),data:$("#update_user_form").serialize(),dataType:"json",success:function(e){$("#modalPage").modal("hide"),200==e.code?a("Update done",e.message,"success"):a("Update fail",e.message,"error"),$(".dataTable").each((function(){dt=$(this).dataTable(),dt.fnDraw()}))},error:function(e,n,t){a("Update fail",e.statusText+". Please reload and try again","error")}})})),$(".dataTable").on("click",".btn-info",(function(e){e.preventDefault();var t=$(this).attr("id");a("Please wait...","Getting "+n.row($(this).parents("tr")).data().name+" data","info"),$.ajax({type:"GET",url:route("edituser",t),dataType:"json",success:function(e){$("input[name='id']").val(e.id),$("input[name='email']").val(e.email),$("input[name='name']").val(e.name),$("input[name='about']").val(e.about),$("input[name='dob']").val(e.dob),1==e.is_active?$("#is_active").val("1"):$("#is_active").val("0"),"M"==e.gender?$("#gender").val("M"):$("#gender").val("F"),$("input[name='address']").val(e.address),$("input[name='website']").val(e.website),$("input[name='phone']").val(e.phone),$("input[name='date_joined']").val(moment(e.date_joined,"YYYYMMDD").fromNow()),$("input[name='ref_code']").val(e.ref_code),$("#modalPage").modal("show")}})})),$(".filterApp").on("click",(function(e){e.preventDefault();$(this).attr("id");n.columns(1).search(this.value).draw()}))}var t,r,i;$("#dt_application").length&&$("#dt_application").DataTable({processing:!0,serverSide:!0,ajax:baseURL+"/data/application",order:[[0,"desc"]],language:{processing:'<div class="circle-inner"></div>'},columns:[{data:"id",visible:!1,searchable:!1},{data:"name",render:function(e,a,n){return""==e?"-":e}},{data:"website",searchable:!1,orderable:!1},{data:"status",render:function(e,a,n){return"<span class='badge badge-info'>"+e+"</span>"}},{data:"client_id",searchable:!1,orderable:!1},{data:"username",name:"ggid_myuser.name"},{data:"id",render:function(e,a,n){return'<a class="btn btn-sm btn-success" href="'+baseURL+"/application/"+e+"/"+slugify(n.name,{lower:!0})+'">View</a>'}}]}),$("#dt_community").length&&$("#dt_community").DataTable({processing:!0,serverSide:!0,ajax:baseURL+"/data/community",order:[[0,"desc"]],language:{processing:'<div class="circle-inner"></div>'},columns:[{data:"id",visible:!1,searchable:!1},{data:"application.name",render:function(e,a,n){return e.toUpperCase()}},{data:"user.name",render:function(e,a,n){return e.toUpperCase()}},{data:"id",render:function(e,a,n){return'<a class="btn btn-sm btn-success" href="'+baseURL+"/community/"+e+"/"+slugify(n.user.name,{lower:!0})+'">View</a>'}}]}),$("#dt_point").length&&($("#dt_point").DataTable({processing:!0,serverSide:!0,ajax:baseURL+"/data/point",order:[[0,"desc"]],language:{processing:'<div class="circle-inner"></div>'},columns:[{data:"user_id",searchable:!1},{data:"total_point",render:function(e,a,n){return numeral(e).format("0,0")},searchable:!1},{data:"name",name:"ggid_myuser.name",render:function(e,a,n){return _.isNull(e)?"-":e}},{data:"email",name:"ggid_myuser.email"},{data:"user_id",render:function(e,a,n){return'<a class="btn btn-sm btn-success" href="'+baseURL+"/point/"+e+"/"+slugify(n.name,{lower:!0})+'/history">View</a>'}}],initComplete:function(e,a){}}),$(".dataTable").on("click","a.btn-info",(function(e){e.preventDefault();$(this).attr("id")}))),$("#dt_point_category").length&&$("#dt_point_category").DataTable({processing:!0,serverSide:!0,ajax:baseURL+"/data/pointcategory",order:[[7,"desc"]],language:{processing:'<div class="circle-inner"></div>'},columns:[{data:"id",visible:!1,searchable:!1,name:"ggid_pointcategory.id"},{data:"status",name:"ggid_pointcategory.status",render:function(e,a,n){return"Published"==e?"<span class='badge badge-success'>Published</span>":"<span class='badge badge-danger'>"+e+"</span>"}},{data:"amount",searchable:!1,render:function(e,a,n){return numeral(e).format("0,0")}},{data:"name",name:"ggid_pointcategory.name"},{data:"app_name",name:"ggid_application.name"},{data:"action_performed"},{data:"rule_name",name:"ggid_pointcategorytimerule.name",render:function(e,a,n){return"<span class='badge badge-info'>"+e+"</span>"}},{data:"datetime_added",render:function(e,a,n){return e?moment(e,"YYYYMMDD").fromNow():"-"},searchable:!1}],initComplete:function(e,a){}}),$("#dt_qrcode").length&&$("#dt_qrcode").DataTable({processing:!0,serverSide:!0,ajax:baseURL+"/data/qrcode",order:[[7,"desc"]],language:{processing:'<div class="circle-inner"></div>'},columns:[{data:"id",visible:!1,searchable:!1,name:"ggid_qrcode.id"},{data:"event_name"},{data:"message_title"},{data:"start_date",searchable:!1},{data:"end_date",searchable:!1},(t={data:"point",searchable:!1,render:function(e,a,n){return numeral(e).format("0,0")}},r="searchable",i=!1,r in t?Object.defineProperty(t,r,{value:i,enumerable:!0,configurable:!0,writable:!0}):t[r]=i,t),{data:"app_name",name:"ggid_application.name",render:function(e,a,n){return"<span class='badge badge-info'>"+e+"</span>"}},{data:"username",name:"ggid_myuser.name"},{data:"datetime_created",render:function(e,a,n){return e?moment(e,"YYYYMMDD").fromNow():"-"},searchable:!1}],initComplete:function(e,a){}}),$("#dt_qrcode_usage").length&&$("#dt_qrcode_usage").DataTable({processing:!0,serverSide:!0,ajax:baseURL+"/data/qrcode/usage",order:[[3,"desc"]],language:{processing:'<div class="circle-inner"></div>'},columns:[{data:"id",visible:!1,searchable:!1,name:"ggid_qrcodeuserrelation.id"},{data:"username",name:"ggid_myuser.name"},{data:"event_name",name:"ggid_qrcode.event_name"},{data:"point",searchable:!1,render:function(e,a,n){return numeral(e).format("0,0")}},{data:"datetime_created",render:function(e,a,n){return e?moment(e,"YYYYMMDD").fromNow():"-"},searchable:!1}],initComplete:function(e,a){}}),$("#dt_notification").length&&$("#dt_notification").DataTable({processing:!0,serverSide:!0,ajax:baseURL+"/data/notification",order:[[0,"desc"]],language:{processing:'<div class="circle-inner"></div>'},columns:[{data:"id",visible:!1,searchable:!1},{data:"verb",render:function(a,n,t){return e(a)}},{data:"level",render:function(a,n,t){return"<span class='badge badge-info'>"+e(a)+"</span>"}},{data:"username",name:"ggid_myuser.name"},{data:"timestamp",searchable:!1,render:function(e,a,n){return e?moment(e,"YYYYMMDD").fromNow():"-"}}],initComplete:function(e,a){}}),$("#dt_adminlog").length&&$("#dt_adminlog").DataTable({processing:!0,serverSide:!0,ajax:baseURL+"/data/adminlog",order:[[0,"desc"]],language:{processing:'<div class="circle-inner"></div>'},columns:[{data:"id",visible:!1,searchable:!1},{data:"action_time",render:function(e,a,n){return e?moment(e,"YYYYMMDD").fromNow():"-"}},{data:"change_message",render:function(a,n,t){return""!=e(a)?e(a):"-"}},{data:"object_repr",render:function(a,n,t){return e(a)}},{data:"model",name:"django_content_type.model",render:function(a,n,t){return e(a)}},{data:"username",name:"ggid_myuser.name"}],initComplete:function(e,a){}}),$("#chart-with-area").length&&$.ajax({type:"GET",url:baseURL+"/data/user-join",dataType:"json",success:function(e){var a=[],n=[];_.forEach(e,(function(e){if(10===a.length)return!1;a.push(e.join_month+"/"+e.join_year),n.push(e.total_join)})),new Chartist.Line("#chart-with-area",{labels:_.reverse(a),series:[n]},{low:0,showArea:!0,plugins:[Chartist.plugins.tooltip()]})}}),$("#dt_user_dashboard").length&&$("#dt_user_dashboard").DataTable({processing:!0,serverSide:!0,ajax:baseURL+"/data/user/dashboard",order:[[0,"desc"]],language:{processing:'<div class="circle-inner"></div>'},columns:[{data:"id",name:"users.id",visible:!1,searchable:!1},{data:"name",name:"users.name"},{data:"email",name:"users.email"},{data:"privilege",name:"userprivilege.privilege"},{data:"status",name:"userprivilege.status"}],initComplete:function(e,a){}}),$("div.dataTables_filter input").addClass("form-control"),$("div.dataTables_length select").addClass("form-control")}))}});