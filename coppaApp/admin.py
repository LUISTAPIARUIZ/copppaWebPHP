from django.contrib import admin
from .models import Program, Project, InformationRequestProgram, Contact

# Registra tus modelos aquí
admin.site.register(Program)
admin.site.register(Project)
admin.site.register(InformationRequestProgram)
admin.site.register(Contact)