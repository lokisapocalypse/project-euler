# The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.

# Find the sum of all the primes below two million.

# This is not the most elegant solution, but I'm new to python and its late and I'm tired
numbers = range(2, 2000000)

for x in range(3, 2000000):
    isPrime = True

    for prime in primes:
        if x % prime == 0:
            isPrime = False
            break

    if isPrime:
        primes.append(x)
        sumPrimes = sumPrimes + x

print sumPrimes
