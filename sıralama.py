def kabarcik_sirala(trk):
    for i in range(len(trk)-1):
        for j in reversed(range(i+1, len(trk))):
            if trk[j] == 0:
                depo = trk[j-1]
                trk[j-1] = trk[j]
                trk[j] = depo

    print(trk)

trk = [2,4,1,6,4,0,0]
kabarcik_sirala(trk)
