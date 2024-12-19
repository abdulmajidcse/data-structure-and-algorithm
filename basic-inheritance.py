class Shape:
    def area(self):
        pass
    
class Rectangle(Shape):
    def __init__(self, width, height):
        self.width = width
        self.height = height
        
    def area(self, width = 0, height = 0):
        if width and height:
            return width * height
        else:
            return self.width * self.height
    
rectangle = Rectangle(5, 4)
print(rectangle.area())
print(rectangle.area(2, 5))
