from django.urls import path
from . import views

app_name = 'coppaApp'

urlpatterns = [
    path('', views.home, name='home'),
    path('about/', views.about, name='about'),
    path('programs/', views.programs, name='programs'),
    path('program_detail/<int:program_id>/', views.program_detail, name='program_detail'),
    path('project_detail/<int:project_id>/', views.project_detail, name='project_detail'),
    path('informationRequest/', views.informationRequest, name='informationRequest'),
    path('contactRequest/', views.contactRequest, name='contactRequest'),
    path('projects/', views.projects, name='projects'),
    path('contact/', views.contact, name='contact'),
]