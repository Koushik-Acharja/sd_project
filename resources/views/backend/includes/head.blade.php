<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Admin Panel</title>

<link href="{{ asset('ui/backend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ asset('ui/backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('ui/backend/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
<link href="{{ asset('ui/backend/css/sb-admin.css') }}" rel="stylesheet">

<!--  event table structure css -->
<style type="text/css">
.bookin-info {
    padding: 40px 0 0 0;
}
.bookin-info .bookin-table {
    background: #fff;
    width: 100%;
}
.bookin-info .bookin-table th.table-heading {
    text-align: left;
    vertical-align: top;
}
.bookin-info .bookin-table th {
    padding: 10px 24px 10px 20px;
    font-size: 14px;
    color: #000000;
    font-weight: 600;
    line-height: 20px;
    border-bottom: solid 2px #efefef;
}
.bookin-info .bookin-table th .icon-delete {
    float: right;
    color: #999999;
    font-size: 18px;
}
.bookin-info .bookin-table td.Theading {
    border-bottom: none;
    padding: 9px 5px 12px 5px;
    line-height: 15px;
    font-size: 14px;
    color: #000;
    font-weight: 600;
    margin: 0px;
    text-align: center;
    vertical-align: middle;
}
.bookin-info .bookin-table td.first {
    border-left: none;
    padding-left: 20px;
    padding-right: 13px;
    width: 285px;
    text-align: left;
}
.bookin-info .bookin-table td {
    padding: 0px 5px 21px 5px;
    border-bottom: solid 1px #efefef;
    border-left: solid 1px #efefef;
    vertical-align: top;
}
.bookin-info .bookin-table td.first p {
    text-align: left;
}
.bookin-info .bookin-table td p {
    display: block;
    font-size: 13px;
    color: #666666;
    text-align: center;
    margin: 0px;
}
.bookin-info .bookin-table td label {
    line-height: 15px;
    font-size: 14px;
    color: #000;
    padding-bottom: 12px;
    font-weight: 600;
    margin: 0px;
    display: none;
}
.bookin-info .bookin-table th .icon-delete:hover {
    color: #f05b21;
}
.bookin-info .bookinRow .eventbtn {
    float: right;
    line-height: 48px;
    padding: 0 40px;
    font-weight: 600;
}
.eventbtn {
    border: solid 1px #f15b22;
    border-radius: 3px;
    box-shadow: inset 0px 1px 0px #e0a97f;
    background: #f15b22;
    color: #fff;
    transition: all 1s ease;
}
.bookin-info .bookinTotal td.subTotal {
    padding-top: 20px;
    padding-bottom: 20px;
    text-align: right;
}
.bookin-info .bookinTotal td {
    line-height: 22px;
    border-bottom: solid 1px #efefef;
    font-size: 14px;
    color: #666666;
    font-weight: 600;
    padding: 10px 0;
}
.bookin-info .bookinTotal {
    background: #fff;
    width: 100%;
    text-align: right;
}
.bookin-info .bookinTotal td.subTotal {
    padding-top: 20px;
    padding-bottom: 20px;
    text-align: right;
}
.bookin-info .bookinTotal td.amount {
    color: #000;
    width: 355px;
    padding-right: 24px;
    text-align: right;
}
.bookin-info .bookinTotal td {
    line-height: 22px;
    border-bottom: solid 1px #efefef;
    font-size: 14px;
    color: #666666;
    font-weight: 600;
    padding: 10px 0;
}
.bookin-info .bookinRow {
    padding: 20px;
    background: #fff;
    display: inline-block;
    width: 100%;
}
.bookin-info .bookinRow .input-box {
    width: 25%;
    min-width: 262px;
    margin: 7px 0;
    display: inline-block;
}
.bookin-info .bookinRow .input-box label {
    display: inline-block;
    width: auto;
    line-height: 36px;
    font-size: 13px;
    color: #666666;
    font-weight: normal;
    margin: 0px;
}
.bookin-info .bookinRow .input-box input {
    display: inline-block;
    border: solid 1px #e6e6e6;
    border-radius: 3px;
    padding: 8px 10px;
    font-size: 13px;
    color: #000000;
    width: 176px;
    height: 36px;
    line-height: 20px;
}

</style>