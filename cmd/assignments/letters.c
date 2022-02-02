#include <math.h>
#include <time.h>

#include "constants.c"

// marking guide logic
#include "marking_guide.c"

// total score
float totalScore = 0;

// number of characters
int noOfCharacters = 0;

// time taken in seconds
int totalTime = 0;

// function declarations
void attemptAssignment(char letters[], int, int);
void assignmentIntro(char letters[], int, int);

void captureLetterMatrix(char);
void letterHint(char);

void awardCapturedLetter(char letter, int capturedMatrix[ROWS][COLS]);
int markingLogic(int matrix1[ROWS][COLS], int matrix2[ROWS][COLS], int row, int col);
float awardMarks(int matrix1[ROWS][COLS], int matrix2[ROWS][COLS]);
void finalMark(int, char letters[]);

void printLetterMatrixFromArray(int letterMatrix[ROWS][COLS]);

// asignment intro
void assignmentIntro(char letters[], int length, int assignmentDuration)
{
  printf("\n\n---------------------------------------- THE KINDERCARE LEARNING PLATFORM (KLP) - COMMAND LINE INTERFACE ----------------------------------------\n\n");

  printf("ASSIGNMENT SUMMARY :-:-:-:-:-:-:-:-:- \n\n");
  printf("-- Assignment Duration: %d\n", assignmentDuration);
  printf("-- No. of Characters: %d\n", length);
  printf("-- List of Characters: ");

  // assign length to noOfCharacters
  noOfCharacters = length;

  // loop through each character in the letters array
  for (int i = 0; i < length; i++)
  {
    // print the current character in the letters array
    printf("%c, ", letters[i]);
  }
  printf("\n\n");

  printf("-:-:-:-:-:-:-:-: START ASSIGNMENT :-:-:-:-:-:-:-:-:-\n\n");

  printf("INSTRUCTIONS:\n");
  printf("-:- Use 1's and 0's to mark the letters in the matrix.\n");
  printf("-:- Use 1's for *\n");
  printf("-:- Use 0's for <spaces>\n");
  printf("-:- Use the letter hint to see the letter in the matrix.");
  printf("\n\n--------------------------------------------------------------------------------\n\n");
}
// the attempt assignment function takes in a character array and loops through each character in the array while calling the captureLetterMatrix
// function for each character in the array
void attemptAssignment(char letters[], int length, int assignmentDuration)
{

  // intro
  assignmentIntro(letters, length, assignmentDuration);

  // incase we are calling the function, the length is the character_no stored in the db
  for (int i = 0; i < length; i++)
  {
    printf("QN %d: Draw Letter %c", i + 1, letters[i]);
    captureLetterMatrix(letters[i]);
  }

  // get the final marks
  finalMark(assignmentDuration, letters);
}

void finalMark(int assignmentDuration, char letters[])
{

  // print results
  printf("+---------------------------------------- KLP - ASSESSMENT FORM ----------------------------------------+\n\n");

  // characters attempted
  printf("-:- CHARACTERS ATTEMPTED: %s\n", letters);
  printf("-:- NO. of CHARACTERS: %d\n", noOfCharacters);

  // get the average marks
  float averageMarks = totalScore / noOfCharacters;
  printf("\n\n-:- FINAL MARK: %.0f%c\n\n", round(averageMarks), '%');

  // time
  printf("-:- TOTAL TIME TAKEN: %d seconds\n", totalTime);

  // get time left
  int timeLeft = assignmentDuration - totalTime;

  // print time left
  printf("-:- TIME LEFT: %d seconds\n", timeLeft);

  // check if the time taken is greater than the assignment duration and if so, print the you have failed message

  if (timeLeft > 0)
  {
    printf("\n-:- YOU SUBMITTED THE ASSIGNMENT IN TIME\n");
  }
  else
  {

    printf("\n-:- YOU SUBMITTED THE ASSIGNMENT PAST TIME\n");
  }

  printf("+--------------------------------------------------------------------------------------------------------+\n\n");

}

// attempt assignment function to capture the characters
void captureLetterMatrix(char letter)
{

  // hint for the letter
  letterHint(letter);

  // Letter Matrix
  int capturedMatrix[ROWS][COLS];

  printf("-- SOLUTION: Enter the Matrix Values for LETTER %c\n\n", letter);

  // start the timer
  time_t start, end;
  time(&start);

  // loop through the rows
  for (int row = 0; row < ROWS; row++)
  {
    // loop through the columns
    for (int col = 0; col < COLS; col++)
    {
      printf("- %c ROW [%d] COL [%d]: ", letter, (row + 1), (col + 1));
      scanf("%d", &capturedMatrix[row][col]);
    }
  }
  // end timer
  time(&end);

  printf("\n\n-- OUTPUT: Here's what you entered for LETTER %c\n\n", letter);
  printLetterMatrixFromArray(capturedMatrix);

  // calculate the time interval
  int timeInterval = (int)difftime(end, start);

  printf("\n\n-- TIME TAKEN ON LETTER %c:--: %d seconds\n", letter, timeInterval);

  //  total time taken increment
  totalTime += timeInterval;

  // Award a mark for the captured letter
  awardCapturedLetter(letter, capturedMatrix);
}

// this function takes the character and provides a hint to the pupil on how the letter should be constructed
void letterHint(char letter)
{

  printf("\n\n-- HINT:  LETTER %c is constructed by the following pattern:\n\n", letter);

  // the switch statement to check through A-Z to determine the letter and then prints the hint
  switch (letter)
  {
  case 'A':

    printLetterMatrixFromArray(letter_a);
    break;
  case 'B':
    printLetterMatrixFromArray(letter_b);
    break;
  case 'C':
    printLetterMatrixFromArray(letter_c);
    break;
  case 'D':
    printLetterMatrixFromArray(letter_d);
    break;
  case 'E':
    printLetterMatrixFromArray(letter_e);
    break;
  case 'F':

    printLetterMatrixFromArray(letter_f);
    break;
  case 'G':
    printLetterMatrixFromArray(letter_g);
    break;
  case 'H':
    printLetterMatrixFromArray(letter_h);
    break;
  case 'I':
    printLetterMatrixFromArray(letter_i);
    break;
  case 'J':
    printLetterMatrixFromArray(letter_j);
    break;
  case 'K':
    printLetterMatrixFromArray(letter_k);
    break;
  case 'L':
    printLetterMatrixFromArray(letter_l);
    break;
  case 'M':
    printLetterMatrixFromArray(letter_m);
    break;
  case 'N':
    printLetterMatrixFromArray(letter_n);
    break;
  case 'O':
    printLetterMatrixFromArray(letter_o);
    break;
  case 'P':
    printLetterMatrixFromArray(letter_p);
    break;
  case 'Q':
    printLetterMatrixFromArray(letter_q);
    break;
  case 'R':
    printLetterMatrixFromArray(letter_r);
    break;
  case 'S':
    printLetterMatrixFromArray(letter_s);
    break;
  case 'T':
    printLetterMatrixFromArray(letter_t);
    break;
  case 'U':

    printLetterMatrixFromArray(letter_u);
    break;
  case 'V':
    printLetterMatrixFromArray(letter_v);
    break;
  case 'W':
    printLetterMatrixFromArray(letter_w);
    break;
  case 'X':
    printLetterMatrixFromArray(letter_x);
    break;
  case 'Y':
    printLetterMatrixFromArray(letter_y);
    break;
  case 'Z':
    printLetterMatrixFromArray(letter_z);
    break;
  default:
    printLetterMatrixFromArray(letter_a);
    break;
  }

  printf("\nHere you Go!  All the Best!\n\n\n");
}

// Assess the pupil's marks
// this calls all the necessary functions to award marks to the pupil
void assessPupil()
{
}

// this function takes in the letter, and its captured matrix and returns a mark
// the mark is the number of correct marks
void awardCapturedLetter(char letter, int capturedMatrix[ROWS][COLS])
{

  float score = 0;

  // the expected matrix is the letter matrix
  // we shall use the letter to determine which matrix to use
  //  A-Z for the letters
  switch (letter)
  {
  case 'A':
    score = awardMarks(letter_a, capturedMatrix);
    break;
  case 'B':
    score = awardMarks(letter_b, capturedMatrix);
    break;
  case 'C':
    score = awardMarks(letter_c, capturedMatrix);
    break;
  case 'D':
    score = awardMarks(letter_d, capturedMatrix);
    break;
  case 'E':
    score = awardMarks(letter_e, capturedMatrix);
    break;
  case 'F':
    score = awardMarks(letter_f, capturedMatrix);
    break;
  case 'G':
    score = awardMarks(letter_g, capturedMatrix);
    break;

  case 'H':
    score = awardMarks(letter_h, capturedMatrix);
    break;

  case 'I':
    score = awardMarks(letter_i, capturedMatrix);
    break;

  case 'J':
    score = awardMarks(letter_j, capturedMatrix);
    break;

  case 'K':
    score = awardMarks(letter_k, capturedMatrix);
    break;

  case 'L':
    score = awardMarks(letter_l, capturedMatrix);
    break;

  case 'M':
    score = awardMarks(letter_m, capturedMatrix);
    break;

  case 'N':
    score = awardMarks(letter_n, capturedMatrix);
    break;

  case 'O':
    score = awardMarks(letter_o, capturedMatrix);
    break;

  case 'P':
    score = awardMarks(letter_p, capturedMatrix);
    break;

  case 'Q':
    score = awardMarks(letter_q, capturedMatrix);
    break;

  case 'R':
    score = awardMarks(letter_r, capturedMatrix);
    break;

  case 'S':
    score = awardMarks(letter_s, capturedMatrix);
    break;

  case 'T':
    score = awardMarks(letter_t, capturedMatrix);
    break;

  case 'U':
    score = awardMarks(letter_u, capturedMatrix);
    break;

  case 'V':
    score = awardMarks(letter_v, capturedMatrix);
    break;

  case 'W':
    score = awardMarks(letter_w, capturedMatrix);
    break;

  case 'X':
    score = awardMarks(letter_x, capturedMatrix);
    break;

  case 'Y':
    score = awardMarks(letter_y, capturedMatrix);
    break;

  case 'Z':
    score = awardMarks(letter_z, capturedMatrix);
    break;

  default:
    printf("Invalid Letter\n");

    break;
  }

  // add the score to the pupil's total score
  totalScore += score;

  printf("\n\n-- SCORE for LETTER %c: %.0f%c", letter, round(score), '%');

  printf("\n\n--------------------------------------------------------------------------------\n\n\n\n");
}

// marking function that takes in 2 integer arrays ,compares their values at the given position,if the values are matching, award a mark, else award a zero
int markingLogic(int matrix1[ROWS][COLS], int matrix2[ROWS][COLS], int row, int col)
{
  // if the value at the given row and column is not equal to the value at the same row and column in the second matrix
  if (matrix1[row][col] != matrix2[row][col])
  {
    // return 0
    return 0;
  }
  else
  {
    // return 1
    return 1;
  }
}

// This is the function that does the actual awarding of marks based on user input
float awardMarks(int matrix1[ROWS][COLS], int matrix2[ROWS][COLS])
{
  // marks
  float marks = 0;
  // score out of 100
  float score = 0;

  // loop through the rows
  for (int row = 0; row < ROWS; row++)
  {
    // loop through the columns
    for (int col = 0; col < COLS; col++)
    {
      // if the value at the given row and column is not equal to the value at the same row and column in the second matrix
      marks += markingLogic(matrix1, matrix2, row, col);
    }
  }

  score = (marks / MAX_SIZE) * 100;

  // return the score
  return score;
}

// This function prints the letter pattern in form of * and spaces
void printLetterMatrixFromArray(int letterMatrix[ROWS][COLS])
{

  // print the table body
  for (int row = 0; row < ROWS; row++)
  {
    for (int col = 0; col < COLS; col++)
    {
      if (letterMatrix[row][col] == 0)
      {
        printf("%2c", ' ');
      }
      else
      {
        printf("%2c", '*');
      }
    }
    printf("\n");
  }
}
