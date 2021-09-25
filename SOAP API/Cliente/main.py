from zeep import Client

cliente = Client('http://localhost:8080/Service/WSop?WSDL')

if cliente.service.RUT("20237683","5"):
    print("Tu RUT es correcto")
else:
    print("Tu RUT es incorrecto")
