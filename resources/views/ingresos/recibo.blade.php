@extends('layouts.app')

@php ($title = 'Recibo')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
          <span>
            <img src="{{ URL::asset('images/sources/user128x128.png') }}">
          </span>
    			<h2></h2><h3 class="pull-right"># 12345</h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Para:</strong><br>
    					John Smith<br>
    					1234 Main<br>
    					Apt. 4B<br>
    					Springfield, ST 54321
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
        			<strong>De:</strong><br>
    					Jane Smith<br>
    					1234 Main<br>
    					Apt. 4B<br>
    					Springfield, ST 54321
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-12 text-right">
    				<address>
    					<strong>Fecha:</strong><br>
    					March 7, 2014<br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>

    <div class="row">
    	<div class="col-md-6">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title">
              <strong>
                Detalle
              </strong>
            </h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed table-bordered">
    						<thead>
                    <tr>
        							<td><strong>Concepto</strong></td>
        							<td class="text-center"><strong>Total</strong></td>
                    </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
                  <tr>
        						<td>Concepto</td>
    								<td class="text-center">$600.00</td>
    							</tr>
    							<tr>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    							</tr>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>
@endsection
