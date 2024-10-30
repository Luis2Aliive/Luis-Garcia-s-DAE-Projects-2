age = 14
name = "Luis Garcia"
otherName = 'Luis
GAS_PRICE = 5.99 

print( age )
print( name )
print(otherName)
print( GAS_PRICE )

print(question)
for i, option in enumerate(options): 
    print(f"{i + 1}. {option}")

answer = input("Please enter the number of your answer: ")

if answer. isdigit() and 1 <= int (answer) <= len(options):
    return int (answer) -1 == correct_index 
else: 
    print("Invalid input. Please enter a number corresponding to your choice.")
    return False 
def run_quiz(): 
    score = 0 
    questions = [
        {
            "question": "What is the capital of France?",
            "options": ["Berlin", "Madrid", "Paris", "Rome"],
            "correct_index": 2
        },
        {
            "question": "What is 2 + 2?",
            "options": ["3", "4", "5", "6"],
            "correct_index": 1
        },
        {
            "question": "Which planet is known as the Red Planet?",
            "options": ["Earth", "Mars", "Jupiter", "Saturn"],
            "correct_index": 1
        },
        {
            "question": "What is the largest ocean on Earth?",
            "options": ["Atlantic", "Indian", "Arctic", "Pacific"],
            "correct_index": 3
        },
        {
            "question": "Who wrote 'Romeo and Juliet'?",
            "options": ["Charles Dickens", "Mark Twain", "William Shakespeare", "Jane Austen"],
            "correct_index": 2
        },
        {
            "question": "What is the chemical symbol for gold?",
            "options": ["Au", "Ag", "Pb", "Fe"],
            "correct_index": 0
        }
    ]
    for q in questions:
        if ask_question (q["question"], q["options"], q["correct_index"]):
            print("Correct!")
            score +=1 
        else: 
            print("Incorrect!")
        print()

print(f"You Scored {score} out of {len(questions)}.")
if score == len (questions):
    print("Excellent! You got all the questions right!")
elif score >= len(questions) // 2:
    print("Good job! You passed the quiz.")
else:
    print("You might want to try again.")
else: 
    print("You might want to try again.")

if__name__ == "__main__":
    run_quiz()
