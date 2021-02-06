sayilar = []
tek_sayilar = []

for i in range(0, 10):
    sayilar.append(int(input("Lütfen sayı giriniz: ")))

for sayi in sayilar:
  if sayi%2 == 1:
    tek_sayilar.append(sayi)

print("Liste İçindeki En Büyük Tek Sayı :", max(tek_sayilar), "\nListe İçindeki En Küçük Sayı :", min(tek_sayilar))