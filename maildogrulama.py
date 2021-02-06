import re

regex = '^[a-z0-9]+[\._]?[a-z0-9]+[@]\w+[.]\w{2,3}$'


def check(email):
    if (re.search(regex, email)):
        print("Teşekkürler , Mail Adresiiniz Doğru")

    else:
        print("Mail adresiniz hatalı!")


email = input("Lütfen mail adresinizi giriniz: ")

check(email)

