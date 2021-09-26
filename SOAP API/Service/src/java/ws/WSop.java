/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ws;

import javax.jws.WebService;
import javax.jws.WebMethod;
import javax.jws.WebParam;

/**
 *
 * @author meshdako
 */
@WebService(serviceName = "WSop")
public class WSop {
    /**
     * Web service operation
     */
    @WebMethod(operationName = "RUT")
    @SuppressWarnings("UnusedAssignment")
    public boolean RUT(@WebParam(name = "RUNwD") int RUNwD, @WebParam(name = "Digito") int Digito) {
        //TODO write your implementation code here:
        
        boolean ToF = false;
        int DV = Digito;
                
        if(DV == 0){
            DV = 11;
        }
        
        //Cálculo de dígito verficador.
        int Dverificador, suma = 0, aux = 2;
        int RUN = RUNwD;
        
        
        while(RUN != 0){
            suma = suma + (RUN % 10) * aux;
            RUN = RUN / 10;
            aux++;
            
            if(aux == 8){
                aux = 2;
            }
        }
        
        Dverificador = 11 - (suma % 11);
        
        if(Dverificador == DV){
            ToF = true;
        }
        
        return ToF;
    }

    /**
     * Web service operation
     */
    @WebMethod(operationName = "Nombre")
    public String[] Nombre(@WebParam(name = "Nombre_Completo") String Nombre_Completo) {
        //TODO write your implementation code here:
        
        String delimitadores= "[ .,;?!¡¿\'\"\\[\\]]+";
        
        String[] Nombre = Nombre_Completo.split(delimitadores);
        
        return Nombre;
    }


}
