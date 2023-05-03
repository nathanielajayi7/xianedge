#create a class for course entry 
class CourseEntry: 
    courseCode = None 
    creditLoad = None 
    grade = None 
    
    def __str__(self):
        return f"Course Code: {self.courseCode} -- Credit Load: {self.creditLoad} --  Grade: {self.grade}"

    def gradeValue(self):
        match (self.grade):
            case "A" : return 5
            case "B" : return 4
            case "C" : return 3
            case "D" : return 2
            case "E" : return 1
            case "F" : return 0
            case "ABS" : return 0
            case _ : return 0

def calc_gpa(courses):
    totalGradeCount = 0
    totalCreditLoad = 0
    print("------REGISTERED COURSES--------")
    for course in courses:
        # print(int(course.creditLoad or "0"))
        # print(course.gradeValue())
        
        print(course)
        
        totalCreditLoad += int(course.creditLoad or "0") * 5
        totalGradeCount += int(course.gradeValue() or "0") * int(course.creditLoad or "0")
        
    
    return (totalGradeCount / totalCreditLoad) * 5;
    
def seek_response():
    while(courses[-1].courseCode == None): 
        courseCode = (input("Enter course code: ")).strip() 
        courses[-1].courseCode = courseCode 
    
    while(courses[-1].creditLoad == None): 
        creditLoad = (input("Enter credit load: ")).strip()
        while True:
            if(creditLoad.isdigit()):
                break;
            else:
                creditLoad = (input("Please enter a valid integer for your course credit load: ")).strip()
        courses[-1].creditLoad = creditLoad 

    while(courses[-1].grade == None): 
        grade = (input("Enter your grade between A and F or ABS, e.g A: ")).upper().strip()
        while True:
            if(grade in ["A", "B", "C", "D", "E", "F", "ABS"]):
                break;
            else:
                # print("Please enter a valid grade, e.g A: ")
                grade = (input("Please enter a valid grade between A and F or ABS, e.g A: ")).upper().strip()
        courses[-1].grade = grade 
        
        # print(courses[-1])

    

    
courses = list[CourseEntry]() 

courses.append(CourseEntry()) 

seek_response()

while True: 
    action = input("Do you want to add another course? [y/n] - you can also leave blank for no: ") 
    if(action.lower().strip() == "y"): 
        courses.append(CourseEntry()) 
        seek_response()
    else: 
        print("Your cGPA is: ", calc_gpa(courses))
        break;