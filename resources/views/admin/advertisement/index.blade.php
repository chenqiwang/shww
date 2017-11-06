@extends('admin.parent.index')

@section('title', '广告列表')
@section('content')
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">文章列表</div>


                            </div>
                            <div class="widget-body  am-fr">

                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <form action="{{ URL('admin/ad/create') }}" method="get">
                                                    <button type="submit" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                                    <div class="am-form-group tpl-table-list-select">
                                        <select data-am-selected="{btnSize: 'sm'}">
                                      <option value="option1">所有类别</option>
                                      <option value="option2">IT业界</option>
                                      <option value="option3">数码产品</option>
                                      <option value="option3">笔记本电脑</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                        <input type="text" class="am-form-field ">
                                        <span class="am-input-group-btn">
                                            <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="button"></button>
                                        </span>
                                    </div>
                                </div>

                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                                        <thead>
                                            <tr>
                                                <th>广告缩略图</th>
                                                <th>广告链接地址</th>
                                                <th>广告商</th>
                                                <th>登告时间</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        @foreach( $users as $us )
                                        <tbody>
                                            <tr class="gradeX">
                                                <td>
                                                    <img src="{{ asset('ad/'.$us->pic) }}" class="tpl-table-line-img" alt="">
                                                </td>
                                                <td class="am-text-middle">{{ $us->url }}</td>
                                                <td class="am-text-middle">{{ $us->title }}</td>
                                                <td class="am-text-middle">{{ $us->time }}</td>
                                                <td class="am-text-middle">
                                                    <div class="tpl-table-black-operation">
                                                        <a href='{{ URL("admin/ad/$us->id/edit") }}'>
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a href="javascript:;" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- more data -->
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="am-u-lg-12 am-cf">

                                    {!! $users->render() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@if( session('msg') )
        <script>
            alert({{ session('msg') }});
        </script>
@endif
@endsection