
public class AppConta {
    
    public static void main(String[] args) {
        
        Conta c;
        c = new Conta(); //objeto conta
        
        Cliente cliente;
        cliente = new Cliente();
        
        Endereco end;
        end = new Endereco();
        
        end.setLogradouro("Rua");
        System.out.println("Logradouro " + end.getLogradouro());
        
        double saldoAtual = 0;
        double depositoValor;
        String nomeDono; 
        
              
        
        
      saldoAtual = c.devolveSaldo();
        System.out.println("O saldo atual eh: " + saldoAtual);
        
        depositoValor = c.deposita(10);
        System.out.println("Valor depositado foi: " + c.deposita(10));
        
        System.out.println("O saldo atual eh: " + c.devolveSaldo());
        
        System.out.println("O nome do dono da conta eh: " );
        //deposita 10 conto
        //mostrar saldo novamente
        
    }
}
