<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Participante;

class ParticipanteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $participantes = Participante::all();

        return view('participantes', ['participantes' => $participantes, 'i' => 0]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $participante = new Participante();

        $participante -> name = $request -> input('name');
        $participante -> type = $request -> input('type');
        $participante -> age = $request -> input('age');
        $participante -> belt = $request -> input('belt');
        $participante -> weight = $request -> input('weight');
        $participante -> dojo = $request -> input('dojo');
        $participante -> gender = $request -> input('gender');

        $participante -> save();

        return view('creado', ['participante' => $participante]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo ('Llega show'. $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo ('Llega edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        echo ('llega update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}


//
//
//namespace App\Http\Controllers;
//
//use Illuminate\Http\Request;
//
//use Illuminate\Support\Facades\Storage;
//use Illuminate\Support\Facades\DB;
//use Symfony\Component\HttpFoundation\Response;
//
////importar los modelos a utilizar:
//use App\Video;
//use App\Comment;
//
//class VideoController extends Controller
//{
//    public function index()
//    {
//        $videos = Video::orderBy('id','desc')->paginate(5);
//
//        return view('video.index',array (
//            'videos'=>$videos
//        ));
//    }
//
//    public function createVideo() {
//        return view('video.createVideo');
//    }
//
//    public function saveVideo(Request $request) {
//        //validar formulario
//        $validatedData = $this->validate($request, [
//            'title' => 'required|min:5',  //minimo 5 caracteres
//            'description' => 'required',
//            //'video' => 'mimes:mp4'
//            'video' => 'mimetypes:video/x-msvideo,video/mpeg,video/quicktime,video/mp4,video/x-ms-wmv,video/x-msvideo,application/mxf'
//        ]);
//
//        /*
//        Video Type     Extension       MIME Type
//        Flash           .flv            video/x-flv
//        MPEG-4          .mp4            video/mp4
//        iPhone Index    .m3u8           application/x-mpegURL
//        iPhone Segment  .ts             video/MP2T
//        3GP Mobile      .3gp            video/3gpp
//        QuickTime       .mov            video/quicktime
//        A/V Interleave  .avi            video/x-msvideo
//        Windows Media   .wmv            video/x-ms-wmv
//        */
//
////MIME Types:
////http://svn.apache.org/repos/asf/httpd/httpd/trunk/docs/conf/mime.types
//
//        $video = new Video();
//        //necesitamos el usuario para guardarlo en la base de datos:
//        $user = \Auth::user();
//        //asignamos los campos al objeto Video:
//        $video->user_id = $user->id;
//        $video->title=$request->input('title');
//        $video->description=$request->input('description');
//
//        //Subida de la miniatura
//        $image = $request->file('image');
//        if ($image) {
//            $image_path = $image->getClientOriginalName();  //nombre del fichero
//            \Storage::disk('images')->put($image_path, \File::get($image));  //guardamos físicamente el archivo en la carpeta /storage/app/images.
//            //tenemos que crear esta carpeta y configurarla como un disco en /config/filesystems.php
//            //Le pasamos primero la ruta del archivo y después el archivo.
//            //guardamos la ruta a la miniatura en la BD:
//            $video->image = $image_path;
//        }
//
//        //Subir el vídeo
//        $video_file = $request->file('video');
//        if ($video_file) {
//            $video_path = time().$video_file->getClientOriginalName();
//            \Storage::disk('videos')->put($video_path, \File::get($video_file));
//            //guardamos la ruta en la BD:
//            $video->video_path = $video_path;
//        }
//
//        //el ORM Eloquent guarda el objeto en la base de datos:
//        $video->save();
//
//        return redirect()->route('createVideo')->with(array(
//            'message' => 'El video se ha guardado correctamente.'
//        ));
//
//    }
//
//    public function getImage($filename) {
//        $file = Storage::disk('images')->get($filename);
//        return new Response($file, 200);
//        //esto devuelve el archivo y un código 200
//    }
//
//    public function getVideoPage($video_id) {
//        $video = Video::find($video_id);
//        return view ('video.detail', array(
//            'video' => $video
//        ));
//    }
//
//    public function getVideo($filename) {
//        $file = Storage::disk('videos')->get($filename);
//        return new Response($file, 200);
//    }

//    public function delete($video_id) {
//        //usuario identificado:
//        $user = \Auth::user();
//        //video a eliminar:
//        $video = Video::find($video_id);
//        //Comentarios del vídeo a eliminar:
//        $comments = Comment::where('video_id',$video_id)->get();

//        //si hay un usuario identificado y es el autor del video o es administrador:
//        if ($user && ($video->user_id == $user->id || $user->role == 'Admin')) {
//            //eliminar comentarios si el video tiene comentarios:
//            if ($comments && count($comments)>=1) {
//                foreach ($comments as $comment) {
//                    $comment->delete();
//                }
//            }
//            //eliminar ficheros (imágenes y video)
//            Storage::disk('images')->delete($video->image);
//            Storage::disk('videos')->delete($video->video_path);
//            //borrar el video:
//            $video->delete();
//
//            $message = array('message' => 'Video eliminado correctamente');
//        } else {
//            $message = array('message' => 'Necesitas permisos de administrador para eliminar un vídeo');
//        }
//        return redirect()->route('listaVideos')->with($message);
//    }
//
//
//}