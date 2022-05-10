import random

def monty_hall(switch = False):

    # 1 = car, 0 = goat
    doors = [0, 0, 1]

    # optional: randomize the order of the doors
    # random.shuffle(doors)

    # pick a door
    my_choice = random.choice(doors)

    if(switch):
        # switch the choice between 0 and 1
        return 1 - my_choice
    else:
        # i'm headstrong, stick with my choice
        return my_choice
    
def play(n = 10, switch = False):

    wins = 0

    # play n times
    for i in range(n):
        wins += monty_hall(switch)

    # return the winrate
    return wins / n

p = play(10000, True)
print("Winrate with switching:", p)

p = play(10000, False)
print("Winrate without switching:", p)