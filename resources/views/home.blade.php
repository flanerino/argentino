@extends('layouts.app')

@php ($title = 'Mi Panel')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-heading">Panel</div>

                <div class="panel-body">

                    <div class="row tile_count">
                        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                          <span class="count_top"><i class="fa fa-user"></i> Socios</span>
                          <div class="count">{{$socios}}</div>
                          <span class="count_bottom"><i class="green">4 </i> Este mes</span>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                          <span class="count_top"><i class="fa fa-usd"></i> Ingresos</span>
                          <div class="count">{{$ingresos}}</div>
                          <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> respecto al último mes</span>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                          <span class="count_top"><i class="fa fa-usd"></i> Gastos</span>
                          <div class="count green">{{$gastos}}</div>
                          <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>34% </i> resperto al último mes</span>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                          <span class="count_top"><i class="fa fa-line-chart"></i> Balance</span>
                          <div class="count">{{$balance}}</div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="dashboard_graph">

                            <div class="row x_title">
                              <div class="col-md-6">
                                  <h3>Balance últimos 6 meses <small style="color:red">a futuro</small></h3>
                              </div>
                              <div class="col-md-6">
                                <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                  <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                  <span>June 3, 2017 - July 2, 2017</span> <b class="caret"></b>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <div id="chart_plot_01" class="demo-placeholder" style="padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 850px; height: 280px;" width="850" height="280"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; max-width: 106px; top: 264px; left: 126px; text-align: center;" class="flot-tick-label tickLabel">Jan 02</div><div style="position: absolute; max-width: 106px; top: 264px; left: 261px; text-align: center;" class="flot-tick-label tickLabel">Jan 03</div><div style="position: absolute; max-width: 106px; top: 264px; left: 396px; text-align: center;" class="flot-tick-label tickLabel">Jan 04</div><div style="position: absolute; max-width: 106px; top: 264px; left: 531px; text-align: center;" class="flot-tick-label tickLabel">Jan 05</div><div style="position: absolute; max-width: 106px; top: 264px; left: 666px; text-align: center;" class="flot-tick-label tickLabel">Jan 06</div><div style="position: absolute; max-width: 106px; top: 264px; left: 801px; text-align: center;" class="flot-tick-label tickLabel">Jan 07</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; top: 252px; left: 13px; text-align: right;" class="flot-tick-label tickLabel">0</div><div style="position: absolute; top: 232px; left: 7px; text-align: right;" class="flot-tick-label tickLabel">10</div><div style="position: absolute; top: 213px; left: 7px; text-align: right;" class="flot-tick-label tickLabel">20</div><div style="position: absolute; top: 194px; left: 7px; text-align: right;" class="flot-tick-label tickLabel">30</div><div style="position: absolute; top: 174px; left: 7px; text-align: right;" class="flot-tick-label tickLabel">40</div><div style="position: absolute; top: 155px; left: 7px; text-align: right;" class="flot-tick-label tickLabel">50</div><div style="position: absolute; top: 136px; left: 7px; text-align: right;" class="flot-tick-label tickLabel">60</div><div style="position: absolute; top: 116px; left: 7px; text-align: right;" class="flot-tick-label tickLabel">70</div><div style="position: absolute; top: 97px; left: 7px; text-align: right;" class="flot-tick-label tickLabel">80</div><div style="position: absolute; top: 78px; left: 7px; text-align: right;" class="flot-tick-label tickLabel">90</div><div style="position: absolute; top: 58px; left: 1px; text-align: right;" class="flot-tick-label tickLabel">100</div><div style="position: absolute; top: 39px; left: 2px; text-align: right;" class="flot-tick-label tickLabel">110</div><div style="position: absolute; top: 20px; left: 1px; text-align: right;" class="flot-tick-label tickLabel">120</div><div style="position: absolute; top: 1px; left: 1px; text-align: right;" class="flot-tick-label tickLabel">130</div></div></div><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 850px; height: 280px;" width="850" height="280"></canvas></div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                              <div class="x_title">
                                <h2>Referencias</h2>
                                <div class="clearfix"></div>
                              </div>

                              <div class="col-md-12 col-sm-12 col-xs-6">
                                <div>
                                  <p>Ingresos</p>
                                  <div class="">
                                    <div class="progress progress_sm" style="width: 76%;">
                                      <div class="progress-bar" role="progressbar" data-transitiongoal="100" style="width: 100%;background: #93B5BC" aria-valuenow="79"></div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <p>Egresos</p>
                                  <div class="">
                                    <div class="progress progress_sm" style="width: 76%;">
                                      <div class="progress-bar" role="progressbar" data-transitiongoal="100" style="width: 100%;;background: #66ACAC" aria-valuenow="59"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="clearfix"></div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
