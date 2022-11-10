from itertools import combinations
 
data_list = [1, 2, 3, 4, 5]
 
kombinasi = combinations(data_list, r=2)
 
# cetak objects
print('object kombinasi', kombinasi)
 
 
# Cetak Hasil
for index, data in enumerate(list(kombinasi), 1):
    print(f'kombinasi ke: {index}. {data}')
