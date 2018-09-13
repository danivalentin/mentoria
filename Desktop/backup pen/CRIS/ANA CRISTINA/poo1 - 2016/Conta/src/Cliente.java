
public class Cliente {
    
    private String nomeCliente;
    private String cpf;
    private Endereco endereco;
    private Conta conta;
    
    
    public void setEndereco (Endereco endereco){
       this.endereco = endereco;
    }

    public void setConta(Conta conta) {
        this.conta = conta;
    }
    
    public Conta getConta(){
        return this.conta;
    }
    public Endereco getEndereco(){
        return this.endereco;
    }

    public String getNomeCliente() {
        return this.nomeCliente;
    }

    public void setNomeCliente(String nomeCliente) {
        this.nomeCliente = nomeCliente;
    }

    public String getCpf() {
        return this.cpf;
    }

    public void setCpf(String cpf) {
        this.cpf = cpf;
    }
    
}
