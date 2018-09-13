
public class Conta {
    
   private String numero;
    private double saldo;
    private double limite;
    private Cliente cliente;

    public String getNumero() {
        return this.numero;
    }

    public void setNumero(String numero) {
        this.numero = numero;
    }

    public double getSaldo() {
        return this.saldo;
    }

    public void setSaldo(double saldo) {
        this.saldo = saldo;
    }

    public double getLimite() {
        return this.limite;
    }

    public void setLimite(double limite) {
        this.limite = limite;
    }

    public Cliente getCliente() {
        return this.cliente;
    }

    public void setCliente(Cliente cliente) {
        this.cliente = cliente;
    }
    
   
  double devolveSaldo(){
      return this.saldo;
  }  
  double deposita(double valor){
       this.saldo +=  valor;
      return valor;
  }
  boolean saca(double valor){
      if(this.saldo + this.limite >= valor){
         this.saldo -= valor; 
      return true;

      }
      else
      {
          return false;
      }
  }
  public boolean transferePara(double valor, Conta contaDestino){
      
      if(this.saldo + this.limite >= valor){
       this.saldo -= valor;
      contaDestino.deposita(valor);
      return true;
      }
      else{
          return false;  
      }
  }
}
