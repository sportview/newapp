class student:
    def __init__(self,sname,address,email,mobile,password):
        self.sname=sname
        self.address=address
        self.email=email
        self.mobile=mobile
        self.__password=password
    def displayname(self):
        print(self.sname)
    def setname(self,name):
        self.name=input("please enter your name")
    def getname(self):
        return self.sname
    def setpasword(self,password):
        self.__password=password
    def getPassword(self):
        return self.__password 

    #protected tutorial  
    #def setpasword(self,password):
     #   self._password=password

    #def getPassword(self):
    #    return self._password   
    

hilder=student("hilder","P.O BOX 10202 NAIROBI","kamauc63@gmail.com","0706641899","Kingdom OF Jesus")
hilder.displayname()
print(hilder.getPassword())
