from flask import Flask, render_template, request, redirect
import sqlite3

app = Flask(__name__)


def conectar_banco():
    conexao = sqlite3.connect('database.db')
    return conexao

@app.route("/")
def formulario():
    return render_template("formulario.html")

@app.route("/enviar-sugestao", methods=["POST"])
def enviar_sugestao():
    nome = request.form["nome"]
    email = request.form["email"]
    mensagem = request.form["mensagem"]

    conexao = conectar_banco()
    cursor = conexao.cursor()
    cursor.execute(
        "INSERT INTO sugestoes (nome, email, mensagem) VALUES (?, ?, ?)",
        (nome, email, mensagem),
    )
    conexao.commit()
    conexao.close()

    return "Sugestão enviada com sucesso!"

if __name__ == "__main__":
    app.run(debug=True)F

