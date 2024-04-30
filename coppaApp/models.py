from django.db import models

# Create your models here.
class Program(models.Model):
    name = models.CharField(max_length=100)
    content = models.TextField()
    image_link = models.URLField()

    def __str__(self):
        return self.name
# Create your models here.
class Project(models.Model):
    name = models.CharField(max_length=100)
    content = models.TextField()
    image_link = models.URLField()

    def __str__(self):
        return self.name
    
class InformationRequestProgram(models.Model):
    program = models.ForeignKey('Program', on_delete=models.CASCADE)
    email = models.EmailField()
    name = models.CharField(max_length=100)
    phone = models.CharField(max_length=20)  # Ajusta la longitud según sea necesario
    position = models.CharField(max_length=100)
    message = models.TextField()
    saved_at = models.DateTimeField(auto_now_add=True)  # Campo para la fecha de guardado

    def __str__(self):
        return f"Information Request for {self.program.name} by {self.name}"
    
class Contact(models.Model):
    first_name = models.CharField(max_length=100)
    last_name = models.CharField(max_length=100)
    email = models.EmailField()
    phone = models.CharField(max_length=9)
    program = models.ForeignKey('Program', on_delete=models.CASCADE, null=True, blank=True)
    project = models.ForeignKey('Project', on_delete=models.CASCADE, null=True, blank=True)
    created_at = models.DateTimeField(auto_now_add=True)

    def __str__(self):
        return f"{self.first_name} {self.last_name}"

