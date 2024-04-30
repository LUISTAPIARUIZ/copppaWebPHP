from django.shortcuts import render, get_object_or_404;
from .models import Program,Project,InformationRequestProgram,Contact;
from django.http import JsonResponse ,Http404;

# Create your views here.
def home(request):
    projects = Project.objects.all()
    return render(request, 'main.html' , {'projects': projects})

def about(request):
    return render(request, 'about.html')

def programs(request):
    programs = Program.objects.all()
    return render(request, 'programs.html' , {'programs': programs})
    

def projects(request):
 # Consultar todos los objetos Project
    projects = Project.objects.all()
    
    # Pasar los proyectos a la plantilla
    return render(request, 'projects.html', {'projects': projects})

def contact(request):
    programs = Program.objects.all()
    projects = Project.objects.all()
    return render(request, 'contact.html', {'projects': projects,'programs': programs})

def program_detail(request, program_id):
    program = get_object_or_404(Program, pk=program_id)
    programs = Program.objects.all()
    return render(request, 'program_detail.html', {'program': program,'programs': programs})

def project_detail(request, project_id):
    try:
        project = get_object_or_404(Project, pk=project_id)
        projects = Project.objects.all()
        return render(request, 'project_detail.html', {'project': project, 'projects': projects})
    except Http404:
        return render(request, 'error/404.html')

def informationRequest(request):
    if request.method == 'POST':
        # Captura los datos del formulario
        program_id = request.POST.get('id')
        program_name = request.POST.get('requestProgramName')
        program_position = request.POST.get('requestProgramPosition')
        program_phone = request.POST.get('requestProgramPhone')
        program_email = request.POST.get('requestProgramEmail')
        program_message = request.POST.get('requestProgramMessage')

        # Guarda la información en el modelo InformationRequestProgram
        InformationRequestProgram.objects.create(
            program_id=program_id,
            email=program_email,
            name=program_name,
            phone=program_phone,
            position=program_position,
            message=program_message
        )

        # Envía un mensaje de confirmación al frontend
        response_data = {
            'message': 'La información ha sido guardada correctamente.'
        }
        return JsonResponse(response_data)
    else:
        # Si no es una solicitud POST, devuelve un error
        return JsonResponse({'error': 'Método no permitido'}, status=405)
    
def contactRequest(request):
    if request.method == 'POST':
        # Obtener los datos del formulario
        first_name = request.POST.get('firstNamec')
        last_name = request.POST.get('lastNamec')
        email = request.POST.get('emailc')
        phone = request.POST.get('phonec')
        program_id = request.POST.get('contacto_program')
        project_id = request.POST.get('contacto_project')

        # Crear un registro de contacto con todos los datos
        contact = Contact.objects.create(
            first_name=first_name,
            last_name=last_name,
            email=email,
            phone=phone,
            program_id=program_id,
            project_id=project_id
        )

        # Envía un mensaje de confirmación al frontend
        response_data = {
            'message': 'La información ha sido guardada correctamente.'
        }
        return JsonResponse(response_data)
    else:
        # Si no es una solicitud POST, devuelve un error
        return JsonResponse({'error': 'Método no permitido'}, status=405)