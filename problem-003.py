# The prime factors of 13195 are 5, 7, 13 and 29.

# What is the largest prime factor of the number 600851475143 ?
num = 600851475143
count = 2

while count < num:
    while num % count == 0:
        num = num / count
    count = count + 1

print num
