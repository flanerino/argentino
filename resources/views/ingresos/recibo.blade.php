@php ($title = 'Recibo')

<div>
    <div>
        <div>
      		<div style="margin-bottom: 50px;">
            <span>
              <img src="./images/sources/user128x128.png" alt="">
            </span>
            <div style="text-align: center; font-size: 14px; float: center; margin-left: -50px;">
              <h3>Club Atlético y Cultural Argentino</h3>
              <p>Asociación Civil - Fundado el 01 de Agosto de 1920</p>
              <p>Personería Jurídica N° 105</p>
              <p>Calle 32 N° 750 General Pico La Pampa Tel. 02302 - 323869</p>
            </div>
            <div style="font-size: 14px; float: right;">
              <h4>Fecha: {{ $ingreso->fecha }}</h4>
              <p>I.V.A Excento</p>
              <p>CUIT.N° 30-67155305-1</p>
              <p>Ing. Brutos (LP) N° 170856-9</p>
            </div>
      		</div>
    		  <h3 style="text-align: center;">Recibo Oficial de Cobro</h3>
    	</div>
    </div>

    <div style="margin-top: 10px; border: 3px solid black; width: 100%;">
      <div style="margin-left: 230px; float: center; margin-top: 20px;">
        <h3>RINAUDO, Hugo A.- (dato fijo)</h3>
        <h3>Cinco.- (dato fijo)</h3>
        <h3>{{ $ingreso->concepto }}.-</h3>
        <h3>${{ $ingreso->monto }}</h3>
      </div>
    	<div style="padding: 20px; text-align: center; margin-left: -500px;">
        <p style="padding: 3px;"><ins>Recibí de:</ins></p>
        <p style="padding: 3px;"><ins>La Cantidad de Pesos:</ins></p>
        <p style="padding: 3px;"><ins>En Concepto de:</ins></p>
        <p style="padding: 3px;"><ins>Total:</ins></p>
    	</div>
      <div style="margin-left: 400px;">
        <p style="text-align: center;">................................................................</p>
        <p style="text-align: center;">Club Atlético y Cultural Argentino</p>
      </div>
    </div>
</div>
