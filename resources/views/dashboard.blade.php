@extends('layout.main')

@section('content')
<div class="page-wrapper-row full-height">
    <div class="page-wrapper-middle">
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <!-- BEGIN PAGE CONTENT BODY -->
                <div class="page-content">
                    <div class="container" style="width:100% !important">
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <div class="mt-content-body">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="portlet light ">
                                            <div class="portlet-title">
                                                <div class="caption caption-md">
                                                    <i class="icon-bar-chart font-dark hide"></i>
                                                    <span class="caption-subject font-green-steel uppercase bold">Sales Summary</span>
                                                    <span class="caption-helper hide">weekly stats...</span>
                                                </div>
                                                <div class="actions">
                                                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                        <label class="btn btn-transparent btn-no-border blue-oleo btn-outline btn-circle btn-sm active">
                                                            <input type="radio" name="options" class="toggle" id="option1">Today</label>
                                                        <label class="btn btn-transparent btn-no-border blue-oleo btn-outline btn-circle btn-sm">
                                                            <input type="radio" name="options" class="toggle" id="option2">Week</label>
                                                        <label class="btn btn-transparent btn-no-border blue-oleo btn-outline btn-circle btn-sm">
                                                            <input type="radio" name="options" class="toggle" id="option2">Month</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="row list-separated">
                                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                                        <div class="font-grey-mint font-sm"> Total Sales </div>
                                                        <div class="uppercase font-hg font-red-flamingo"> 13,760
                                                            <span class="font-lg font-grey-mint">$</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                                        <div class="font-grey-mint font-sm"> Revenue </div>
                                                        <div class="uppercase font-hg theme-font"> 4,760
                                                            <span class="font-lg font-grey-mint">$</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                                        <div class="font-grey-mint font-sm"> Expenses </div>
                                                        <div class="uppercase font-hg font-purple"> 11,760
                                                            <span class="font-lg font-grey-mint">$</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                                        <div class="font-grey-mint font-sm"> Growth </div>
                                                        <div class="uppercase font-hg font-blue-sharp"> 9,760
                                                            <span class="font-lg font-grey-mint">$</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="list-separated list-inline-xs hide">
                                                    <li>
                                                        <div class="font-grey-mint font-sm"> Total Sales </div>
                                                        <div class="uppercase font-hg font-red-flamingo"> 13,760
                                                            <span class="font-lg font-grey-mint">$</span>
                                                        </div>
                                                    </li>
                                                    <li> </li>
                                                    <li class="border">
                                                        <div class="font-grey-mint font-sm"> Revenue </div>
                                                        <div class="uppercase font-hg theme-font"> 4,760
                                                            <span class="font-lg font-grey-mint">$</span>
                                                        </div>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <div class="font-grey-mint font-sm"> Expenses </div>
                                                        <div class="uppercase font-hg font-purple"> 11,760
                                                            <span class="font-lg font-grey-mint">$</span>
                                                        </div>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <div class="font-grey-mint font-sm"> Growth </div>
                                                        <div class="uppercase font-hg font-blue-sharp"> 9,760
                                                            <span class="font-lg font-grey-mint">$</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div id="sales_statistics" class="portlet-body-morris-fit morris-chart" style="height: 267px"> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="portlet light ">
                                            <div class="portlet-title">
                                                <div class="caption caption-md">
                                                    <i class="icon-bar-chart font-dark hide"></i>
                                                    <span class="caption-subject font-green-steel bold uppercase">Member Activity</span>
                                                    <span class="caption-helper">weekly stats...</span>
                                                </div>
                                                <div class="actions">
                                                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                        <label class="btn btn-transparent blue-oleo btn-no-border btn-outline btn-circle btn-sm active">
                                                            <input type="radio" name="options" class="toggle" id="option1">Today</label>
                                                        <label class="btn btn-transparent blue-oleo btn-no-border btn-outline btn-circle btn-sm">
                                                            <input type="radio" name="options" class="toggle" id="option2">Week</label>
                                                        <label class="btn btn-transparent blue-oleo btn-no-border btn-outline btn-circle btn-sm">
                                                            <input type="radio" name="options" class="toggle" id="option2">Month</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="row number-stats margin-bottom-30">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <div class="stat-left">
                                                            <div class="stat-chart">
                                                                <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                                                <div id="sparkline_bar"></div>
                                                            </div>
                                                            <div class="stat-number">
                                                                <div class="title"> Total </div>
                                                                <div class="number"> 2460 </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <div class="stat-right">
                                                            <div class="stat-chart">
                                                                <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                                                <div id="sparkline_bar2"></div>
                                                            </div>
                                                            <div class="stat-number">
                                                                <div class="title"> New </div>
                                                                <div class="number"> 719 </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table-scrollable table-scrollable-borderless">
                                                    <table class="table table-hover table-light">
                                                        <thead>
                                                            <tr class="uppercase">
                                                                <th colspan="2"> MEMBER </th>
                                                                <th> Earnings </th>
                                                                <th> CASES </th>
                                                                <th> CLOSED </th>
                                                                <th> RATE </th>
                                                            </tr>
                                                        </thead>
                                                        <tr>
                                                            <td class="fit">
                                                                <img class="user-pic rounded" src="../assets/pages/media/users/avatar4.jpg"> </td>
                                                            <td>
                                                                <a href="javascript:;" class="primary-link">Brain</a>
                                                            </td>
                                                            <td> $345 </td>
                                                            <td> 45 </td>
                                                            <td> 124 </td>
                                                            <td>
                                                                <span class="bold theme-font">80%</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fit">
                                                                <img class="user-pic rounded" src="../assets/pages/media/users/avatar5.jpg"> </td>
                                                            <td>
                                                                <a href="javascript:;" class="primary-link">Nick</a>
                                                            </td>
                                                            <td> $560 </td>
                                                            <td> 12 </td>
                                                            <td> 24 </td>
                                                            <td>
                                                                <span class="bold theme-font">67%</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fit">
                                                                <img class="user-pic rounded" src="../assets/pages/media/users/avatar6.jpg"> </td>
                                                            <td>
                                                                <a href="javascript:;" class="primary-link">Tim</a>
                                                            </td>
                                                            <td> $1,345 </td>
                                                            <td> 450 </td>
                                                            <td> 46 </td>
                                                            <td>
                                                                <span class="bold theme-font">98%</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fit">
                                                                <img class="user-pic rounded" src="../assets/pages/media/users/avatar7.jpg"> </td>
                                                            <td>
                                                                <a href="javascript:;" class="primary-link">Tom</a>
                                                            </td>
                                                            <td> $645 </td>
                                                            <td> 50 </td>
                                                            <td> 89 </td>
                                                            <td>
                                                                <span class="bold theme-font">58%</span>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="portlet light" id="table-container">
                                            <div class="portlet-title">
                                                <div class="caption font-dark">
                                                    <i class="icon-settings font-dark"></i>
                                                    <span class="caption-subject bold uppercase"> Managed Table</span>
                                                </div>
                                                <div class="actions">
                                                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                        <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                                                            <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                                        <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                                                            <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="table-scrollable">
                                                    <table class="table table-striped table-bordered table-hover" id="table-data">
                                                        <thead>
                                                                <tr>
                                                                    <th scope="col" style="width:5% !important"> Company ID </th>
                                                                    <th scope="col" style="width:20% !important"> Company Name </th>
                                                                    <th scope="col" style="width:10% !important"> Company Email </th>
                                                                    <th scope="col" style="width:5% !important"> Migrate Date </th>
                                                                    <th scope="col" style="width:10% !important"> Migrate Last State </th>
                                                                    <th scope="col" style="width:35% !important"> Migrate Message </th>
                                                                    <th scope="col" style="width:15% !important"> Action </th>
                                                                </tr>
                                                        </thead>
                                                        <tbody id="table-body">
                                                            <div id="table-ajax">
                                                            </div>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="pagination" id="pagination" data-current-page="" style="display: none">
                                                    <a href="javascript:void(0);" id="button-prev" data-url=""><i class="fa fa-angle-left"></i></a>
                                                    <input type="text" name="page-number" id="page-number">
                                                    <a href="javascript:void(0);" id="button-next" data-url=""><i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE CONTENT INNER -->
                    </div>
                </div>
                <!-- END PAGE CONTENT BODY -->
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
    </div>
</div>
@endsection

@section('page-level-scripts')
    
<script src={{ asset('global/scripts/datatable.js') }} type="text/javascript"></script>
<script src={{ asset('global/plugins/datatables/datatables.min.js') }} type="text/javascript"></script>
<script src={{ asset('global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }} type="text/javascript"></script>
<script src={{ asset('pages/scripts/table-datatables-managed.js') }} type="text/javascript"></script>
<script src={{ asset('global/scripts/dashboard.js') }} type="text/javascript"></script>
@endsection

