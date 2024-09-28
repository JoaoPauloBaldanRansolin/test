import tkinter as tk
from tkinter import messagebox, scrolledtext, ttk
import random
import socket
import os
import threading
import time
from faker import Faker

class HackerApp:
    def __init__(self, root):
        self.root = root
        self.root.title("Hacker Mode")
        self.root.geometry("800x600")
        self.root.config(bg='black')

        self.fake = Faker()
        self.generated_data = []
        self.current_frame = None

        self.show_home()

    def show_home(self):
        self.clear_frame()
        self.current_frame = tk.Frame(self.root, bg='black')
        self.current_frame.pack(pady=20)

        title = tk.Label(self.current_frame, text="Hacker Mode", font=("Courier", 24), fg='green', bg='black')
        title.pack(pady=10)

        buttons = [
            ("Gerar Dados Pessoais", self.show_data_generation),
            ("Informações do Sistema", self.show_system_info),
            ("Chuva de Códigos Binários", self.show_code_rain),
            ("Executar Comandos", self.show_command_execution)
        ]

        for (text, command) in buttons:
            btn = tk.Button(self.current_frame, text=text, command=command, bg='blue', fg='white', width=30)
            btn.pack(pady=10)

    def clear_frame(self):
        if self.current_frame:
            self.current_frame.destroy()

    def show_data_generation(self):
        self.clear_frame()
        self.current_frame = tk.Frame(self.root, bg='black')
        self.current_frame.pack(pady=20)

        title = tk.Label(self.current_frame, text="Gerar Dados Pessoais", font=("Courier", 24), fg='green', bg='black')
        title.pack(pady=10)

        self.text_area = scrolledtext.ScrolledText(self.current_frame, width=70, height=20)
        self.text_area.pack(pady=10)

        generate_button = tk.Button(self.current_frame, text="Gerar Dados", command=self.generate_data, bg='purple', fg='white')
        generate_button.pack(pady=5)

        list_button = tk.Button(self.current_frame, text="Listar Dados Gerados", command=self.list_data, bg='orange', fg='white')
        list_button.pack(pady=5)

        back_button = tk.Button(self.current_frame, text="Voltar", command=self.show_home, bg='red', fg='white')
        back_button.pack(pady=10)

    def generate_data(self):
        nome = self.fake.name()
        nome_pai = self.fake.name()
        nome_mae = self.fake.name()
        data_nascimento = self.fake.date_of_birth(minimum_age=18)
        cpf = self.generate_cpf()
        email = self.fake.email()
        telefone = self.fake.phone_number()
        endereco = self.fake.address().replace('\n', ', ')
        genero = random.choice(['Masculino', 'Feminino', 'Outro'])
        idade = self.calculate_age(data_nascimento)

        pessoa = {
            'Nome': nome,
            'Nome do Pai': nome_pai,
            'Nome da Mãe': nome_mae,
            'Data de Nascimento': str(data_nascimento),
            'CPF': cpf,
            'E-mail': email,
            'Telefone': telefone,
            'Endereço': endereco,
            'Gênero': genero,
            'Idade': idade
        }

        self.generated_data.append(pessoa)
        self.display_person(pessoa)

    def calculate_age(self, data_nascimento):
        from datetime import datetime
        birth_date = datetime.strptime(str(data_nascimento), '%Y-%m-%d')
        today = datetime.today()
        return today.year - birth_date.year - ((today.month, today.day) < (birth_date.month, birth_date.day))

    def generate_cpf(self):
        num = [random.randint(0, 9) for _ in range(9)]
        for i in range(2):
            digit = sum((10 - j) * num[j] for j in range(9 + i)) % 11
            num.append(digit if digit < 10 else 0)
        return f"{''.join(map(str, num[:9]))}-{''.join(map(str, num[9:]))}"

    def display_person(self, pessoa):
        self.text_area.insert(tk.END, "\nDados Gerados:\n")
        for key, value in pessoa.items():
            self.text_area.insert(tk.END, f"{key}: {value}\n")
        self.text_area.insert(tk.END, "-"*30 + "\n")

    def list_data(self):
        self.text_area.delete('1.0', tk.END)
        if not self.generated_data:
            self.text_area.insert(tk.END, "Nenhum dado gerado ainda.\n")
        else:
            for index, pessoa in enumerate(self.generated_data):
                self.text_area.insert(tk.END, f"\nPessoa {index + 1}:\n")
                self.display_person(pessoa)

    def show_system_info(self):
        self.clear_frame()
        self.current_frame = tk.Frame(self.root, bg='black')
        self.current_frame.pack(pady=20)

        title = tk.Label(self.current_frame, text="Informações do Sistema", font=("Courier", 24), fg='green', bg='black')
        title.pack(pady=10)

        self.text_area = scrolledtext.ScrolledText(self.current_frame, width=70, height=20)
        self.text_area.pack(pady=10)

        info_button = tk.Button(self.current_frame, text="Mostrar Informações", command=self.show_info, bg='purple', fg='white')
        info_button.pack(pady=5)

        back_button = tk.Button(self.current_frame, text="Voltar", command=self.show_home, bg='red', fg='white')
        back_button.pack(pady=10)

    def show_info(self):
        hostname = socket.gethostname()
        ip_address = socket.gethostbyname(hostname)
        info = f'Hostname: {hostname}\nIP Address: {ip_address}\nConfigurações do sistema:\n'
        info += os.popen('systeminfo').read()  # Para Windows; use `uname -a` em sistemas Unix
        self.text_area.delete('1.0', tk.END)
        self.text_area.insert(tk.END, info)

    def show_code_rain(self):
        self.clear_frame()
        self.current_frame = tk.Frame(self.root, bg='black')
        self.current_frame.pack(pady=20)

        title = tk.Label(self.current_frame, text="Chuva de Códigos Binários", font=("Courier", 24), fg='green', bg='black')
        title.pack(pady=10)

        self.text_area = scrolledtext.ScrolledText(self.current_frame, width=70, height=20)
        self.text_area.pack(pady=10)

        start_button = tk.Button(self.current_frame, text="Iniciar Chuva", command=self.start_rain, bg='purple', fg='white')
        start_button.pack(pady=5)

        stop_button = tk.Button(self.current_frame, text="Parar Chuva", command=self.stop_rain, bg='red', fg='white')
        stop_button.pack(pady=5)

        back_button = tk.Button(self.current_frame, text="Voltar", command=self.show_home, bg='orange', fg='white')
        back_button.pack(pady=10)

    def start_rain(self):
        self.rain_thread = threading.Thread(target=self.rain_codes)
        self.rain_thread.start()

    def stop_rain(self):
        if hasattr(self, 'rain_thread'):
            self.rain_thread.join(timeout=1)

    def rain_codes(self):
        while True:
            binary_code = ''.join(random.choice(['0', '1']) for _ in range(8))
            self.text_area.insert(tk.END, binary_code + '\n')
            self.text_area.yview(tk.END)  # Rolagem automática para o fim
            time.sleep(0.1)  # Animação rápida

    def show_command_execution(self):
        self.clear_frame()
        self.current_frame = tk.Frame(self.root, bg='black')
        self.current_frame.pack(pady=20)

        title = tk.Label(self.current_frame, text="Executar Comandos", font=("Courier", 24), fg='green', bg='black')
        title.pack(pady=10)

        self.text_area = scrolledtext.ScrolledText(self.current_frame, width=70, height=20)
        self.text_area.pack(pady=10)

        self.command_entry = tk.Entry(self.current_frame, width=70)
        self.command_entry.pack(pady=5)

        run_button = tk.Button(self.current_frame, text="Executar Comando", command=self.run_command, bg='purple', fg='white')
        run_button.pack(pady=5)

        back_button = tk.Button(self.current_frame, text="Voltar", command=self.show_home, bg='red', fg='white')
        back_button.pack(pady=10)

    def run_command(self):
        command = self.command_entry.get()
        result = os.popen(command).read()  # Para Windows; use `subprocess` para melhor segurança
        self.text_area.delete('1.0', tk.END)
        self.text_area.insert(tk.END, result)

if __name__ == "__main__":
    root = tk.Tk()
    app = HackerApp(root)
    root.mainloop()
