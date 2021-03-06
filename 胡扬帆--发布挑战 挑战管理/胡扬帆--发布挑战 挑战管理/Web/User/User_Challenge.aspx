﻿<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="User_Challenge.aspx.cs" Inherits="Web.User.User_Challenge" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>猿圈 挑战管理</title>
<link href="../猿圈 挑战管理_files/bootstrap.min.css" rel="stylesheet">
<link href="../猿圈 挑战管理_files/font-awesome.min.css" rel="stylesheet">
<link href="../猿圈 挑战管理_files/bootstrap-switch.min.css" rel="stylesheet">
<link href="../猿圈 挑战管理_files/bootstrap-select.min.css" rel="stylesheet">
<link href="../猿圈 挑战管理_files/style.css" rel="stylesheet">
<link href="../猿圈 挑战管理_files/summernote.css" rel="stylesheet">
<link href="../猿圈 挑战管理_files/summernote-bs3.css" rel="stylesheet">
<link href="../猿圈 挑战管理_files/style(1).css" rel="stylesheet" type="text/css">
<!-- Max css -->
<link href="../猿圈 挑战管理_files/style_new.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>
</head>
<body>
    <!-- #Include virtual="/Common/user_menu.html" -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <section id="middle">
                    <h2 class="h2-tab">
                        <a href="User_Challenge.aspx">我接受的挑战</a>
                    </h2>
                    <h2 class="h2-tab">
                        <a href="User_History.aspx" class="off">挑战历史</a>
                    </h2>
                </section>
            </div>
            <div class="col-md-12 col-no-left-padding">
                <section id="Section1" class="col-md-12">
                    <div class="btn-group">
                        <a class="btn btn-default dropdown-toggle btn-demo-space top-search" data-toggle="dropdown" href="User_Challenge.aspx">全部 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="User_Challenge.aspx?flag=1&reustate=-1">全部</a></li>
                            <li><a href="User_Challenge.aspx?flag=1&reustate=0">未完成的挑战</a></li>
                            <li><a href="User_Challenge.aspx?flag=1&reustate=1">通过的挑战</a></li>
                            <li><a href="User_Challenge.aspx?flag=1&reustate=2">不通过的挑战</a></li>
                        </ul>
                    </div>
                </section>
                <asp:Repeater ID="rpt_Challenge" runat="server">
                    <ItemTemplate>
                        <div class="col-md-3">
                            <section id="Section3">
                                <div class="panel panel-default shadow-effect">
                                    <div class="col-xs-12 panel-header">
                                        <div class="pull-left">
                                            <h4 class="line-control">
                                                    <a href="Challenge.aspx?cid=<%# Eval("Challenge_ID")%>"><%# Eval("Challenge_Name")%>
                                                    </a>
                                                </h4>
                                                <h4 class="line-control">
                                                    <a href="User_Corp_Detail.aspx?cid=<%# Eval("Enterprice_ID")%>"><%# Eval("Enterprice_FullName")%>
                                                    </a>
                                                </h4>
                                        </div>
                                        <div class="pull-right client-info">
                                            <span class="percent text-danger">
                                                <img class="img-circle" style="width: 60px; height: 60px" src="<%# Eval("Enterprice_Logo")%>"></span>
                                        </div>
                                    </div>
                                    <div class="panel-body ">
                                        <ul class="list-unstyled">
                                            <li>月薪：<%# Eval("Challenge_Salary")%></li>
                                            <li>职位诱惑：</li>
                                            <li>
                                                <ul class="companyTags">
                                                    <li><%# Eval("Challenge_Position0")%></li>
                                                    <li><%# Eval("Challenge_Position1")%></li>
                                                    <li><%# Eval("Challenge_Position2")%></li>
                                                </ul>
                                            </li>
                                            <li>挑战项目：</li>
                                            <li>
                                                <ul>
                                                    <li><%# Eval("Challenge_Quiz0")%></li>
                                                    <li><%# Eval("Challenge_Quiz1")%></li>
                                                    <li><%# Eval("Challenge_Quiz2")%></li>
                                                </ul>
                                            </li>
                                            <li>难度：<%# Eval("Challenge_Level")%></li>
                                            <li><i class="fa fa-calendar"></i><%# Eval("Challenge_EnTime")%></li>
                                            <li><i class="fa fa-user"></i><%# Eval("Challenge_Num")%>人已接受挑战</li>
                                            <li class="progress-info"><span class="ongoing">
                                                <br>
                                            </span></li>
                                        </ul>
                                    </div>
                                    <!-- /.panel-body -->
                                    <div class="panel-footer align-center">
                                        <a href="Challenge.aspx?cid=<%# Eval("Challenge_ID")%>">
                                            <button class="btn btn-new1">开始挑战</button></a>
                                        <a href="User_Challenge.aspx?delete=<%# Eval("Challenge_ID")%>" class="btn btn-new2">放弃</a>
                                    </div>
                                    <!-- /.panel-footer -->
                                </div>
                            </section>
                        </div>
                    </ItemTemplate>
                </asp:Repeater>
            </div>
            <div class="col-md-12">
                <section id="Section3">
                    <ul class="pagination">
                        <li class="disabled"><a href="javascript:;">«</a></li>
                        <li class="active"><a>1</a></li>
                        <li class="disabled"><a href="javascript:;">»</a></li>
                    </ul>
                </section>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <!-- #Include virtual="/Common/footer.html" -->
</body>
</html>
