<?php
	$notas = [100.0,50.0,20.0,10.0,5.0,2.0,1.0,0.5,0.25,0.10,0.05];
      
        $ContNotas = array(0,0,0,0,0,0,0,0,0,0,0);
        $dadoValor = number_format($this->valorPagoCliente,2) - number_format($this->valorCompraTotal,2);
		$this->valorTroco=number_format($dadoValor,2);
        $this->valorTrocoCopia = $this->valorTroco;
        
       
        $indice=0;
        while($this->valorTroco!=0)
        {
   
         
            // econtra primeira nota do troco
            while($this->valorTroco<$notas[$indice])
            {    
              
                $indice++;
            }
          
  
            $nota1 =$notas[$indice];
            $nota2 = number_format($nota1,2);
            $this->valorTroco= number_format($this->valorTroco,2)-$nota2;
            $ContNotas[$indice]+=1;
                  
            if($this->valorTroco>=0.03 && $this->valorTroco<0.05 )
            {
                $this->valorTroco = 0.05;
              
            }

           else if($this->valorTroco>=0.01 && $this->valorTroco<=0.02&& $this->valorTroco<0.03 || $this->valorTroco<0.01)
            {
               $this->valorTroco = 0;
            }
          
         
        }

?>