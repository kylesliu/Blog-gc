@extends('admin.layouts.app')
@section('title', '基本配置')

@section('content')
<!-- 主要内容（开始） -->
    <!-- 顶部路径提示（开始） -->
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>首页</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{URL('admin')}}">首页</a>
                </li>
                <li>
                    <strong>系统配置</strong>
                </li>
                <li class="active">
                   <a href="{{URL('admin/article/add')}}">添加文章</a>
                </li>
            </ol>
        </div>
    </div>
    <!-- 顶部路径提示（结束） -->

    <!-- 主体内容（开始） -->
    <div class="wrapper wrapper-content animated fadeInRight">
    
        <div class="row white-bg ">
            <div class="col-lg-12">
                    
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>添加文章<small>...</small></h5>
                        </div>
						
						
                        <div class="ibox-content">
                            <form method="get" class="form-horizontal">
                                <div class="hr-line-dashed"></div>
        
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">文章标题：</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control">
                                        <span class="help-block m-b-none"><i class="fa fa-info-circle">&nbsp</i>前台页面显示的标题</span>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                <label class="col-sm-2 control-label">所属分类</label>
                                    <div class="col-sm-10">
                                        <select class="form-control m-b" name="account">
                                            <option>PHP</option>
                                            <option>laravel</option>
                                            <option> Java</option>
                                            <option>Python</option>
                                        </select> 
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">关键字：</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control">
                                        <span class="help-block m-b-none"><i class="fa fa-info-circle">&nbsp</i>关键字</span>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">关键字：</label>
                                    <div class="col-sm-10">
                                       <textarea type="text" rows="5" name="remark" id="remark" placeholder="输入文章描述" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">内容：</label>
                                    <div class="col-sm-10">
                                       <textarea type="text" rows="5" name="remark" id="remark" placeholder="内容" class="form-control"></textarea>
                                    </div>
                                </div>
                               <div class="form-group">
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3">
                                            <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> 保存信息</button>&nbsp;&nbsp;&nbsp;
                                            <a class="btn btn-danger" href="javascript:history.go(-1);"><i class="fa fa-close"></i> 返回</a>
                                        </div>
                                </div>

                            </form>
                        </div>
                    </div>
            </div>
        </div>

    </div>
    <!-- 主体内容（结束） -->
    

<!-- 主要内容（结束） -->

@endsection


@section('myjs')
   
@endsection