from flask import Flask

app = Flask(__name__)

@app.route('/hola_mundo', methods = ['GET'])
def hola_mundo():
    return "<p>Hola Mundo</p>"
