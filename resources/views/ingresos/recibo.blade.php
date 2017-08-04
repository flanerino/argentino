@php ($title = 'Recibo')

<div>
    <div>
        <div>
    		<div>
          <span>
            <img src="./images/sources/user128x128.png" alt="">
          </span>
    			<h3 style="margin-left: 600px; margin-top: -100px;"># {{$ingreso->num_recibo}}</h3>
    		</div>
    		<hr>
    			<div style="margin: 0px; padding: 0px; float: left;">
    				<address>
        			<strong>Emitido por:</strong><br>
    					Club Atletico y Cultural Argentino<br>
    					Calle 32 Nº 750<br>
    					General Pico, La Pampa, Argentina
    				</address>
    			</div>
          <div style=" margin: 0px; padding: 0px; float: right; margin-right: 30px;">
    				<address>
        			<strong>Forma de pago:</strong><br>
    					{{ $ingreso->forma_pago }}
    				</address>
    			</div>
    		<div style="float: right; margin-right: 100px;">
  				<address>
  					<strong>Fecha:</strong><br>
  					{{$ingreso->fecha}}<br><br>
  				</address>
    		</div>
    	</div>
    </div>

    <div style="margin-top: 130px; float: left; border-top: 2px solid black;">
    	<div>
    		<div>
    			<div>
    				<h3>
              <strong>
                Detalle
              </strong>
            </h3>
    			</div>
          <hr>
          <div style="border: 1px solid; margin-left: 100px; width: 100%; margin-right: 100px;">
            <div style="float: left; padding: 10px;">
              <p style="border-bottom: 2px solid black;"><strong>Total</strong></p>
              <p>${{$ingreso->monto}}</p>
            </div>

            <div style="margin-left: 100px; padding: 10px; border-left: 1px solid black;">
              <p style="border-bottom: 2px solid black;">
                <strong>Concepto</strong>
              </p>
              <p>{{$ingreso->concepto}}</p>
            </div>
          </div>
    		</div>
    	</div>
    </div>
</div>
