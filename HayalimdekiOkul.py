class Okul:
    def __init__(self, adi, turu, dersozellikleri, kurulusyili, dersliksayisi, ogretmensayisi, mevcut):
        self.adi = adi
        self.turu = turu
        self.dersozellikleri = dersozellikleri
        self.kurulusyili = kurulusyili
        self.dersliksayisi = dersliksayisi
        self.ogretmensayisi = ogretmensayisi
        self.mevcut = mevcut


Okul_1 = Okul("Sancaktar", "İlkokul", "Resmi Müfredat", 1984, 16, 20, 320)
Okul_2 = Okul("14 Eylül", "Lise", "Resmi-Seçmeli Müfredat", 1998, 25, 35,
              750)
Okul_3 = Okul("Atatürk", "Üniversite","Resmi-Seçmeli Müfredat, Serbest Etkinlikler", 1970, 200, 100, 1000)

Okullar = [Okul_1, Okul_2, Okul_3]

for okul in Okullar:
    print(okul.adi, okul.turu, okul.dersozellikleri, okul.kurulusyili, okul.dersliksayisi,
          okul.ogretmensayisi, okul.mevcut)