<?php
namespace Home\Controller;
use Think\Controller;
use Think\Image;
use Think\Upload;
use Think\Verify;
class IndexController extends Controller
{
    public function index()
    {
        $this->display();
    }
    public function list()
    {
        $post = M('post')->select();
        $this->assign('post',$post);
        $this->display();
    }
    public function post()
    {
        $id = I('id');
        $post = M('post')->where(array(
            'id'=>$id
        ))->find();
        $this->assign('post',$post);
        $this->display();
    }
    public function handle()
    {
        $title = I('title');
        $content = I('content');
        $id = M('post')->data(array(
            'title'=>$title,
            'content'=>$content,
            'timestamp'=> time()
        ))->add();
        $this->redirect('Index/post',array('id'=>$id));
    }
    public function verify()
    {
        $verify = new Verify();
        $verify->entry();
    }
    public function login()
    {
        $this->display();
    }
    public function login_do()
    {
        //实例化上传类
        $upload = new Upload();
        $upload->maxSize = 1024*1024*2;
        $upload->exts = array('jpg','gif','png','jpeg');
        $upload->rootPath = './Uploads/';
        $upload->savePath = '';
        $info = $upload->upload();
        if(!$info){
            $this->error($upload->getError());
        }else{
            $baseURL = 'Uploads/'.$info['file']['savepath'].$info['file']['savename'];
            echo $baseURL;
        }

        $code = I('code');
        $verify = new Verify();
        if($verify->check($code)){
            $this->success('验证成功','list');
        }else{
            $this->error('验证码错误');
        }
    }
    //获取图片基本信息
    public function imginfo()
    {
      $path = './Public/images/logo_crop_200x200.jpg';
        $image = new Image(Image::IMAGE_GD,$path);
        $arr =[
            'width'=>$image->width(),
            'height'=>$image->height(),
            'mime'=>$image->mime(),
            'type'=>$image->type()
        ];
        dump($arr);
    }
    //图像剪切
    public function crop()
    {
        $path = './Public/images/logo.jpg';
        $image = new Image(Image::IMAGE_GD,$path);
        $image->crop('200','200')->save('./Public/images/logo_crop_200x200.jpg');

    }
    //图像缩略图
    public function thumb()
    {
        $path = './Public/images/logo.jpg';
        $image = new Image(Image::IMAGE_GD,$path);
        $image->thumb('200','200')->save('./Public/images/logo_thumb_200x200.jpg');
    }
    //图像加水印
    public function water()
    {
        $path = './Public/images/logo.jpg';
        $water = './Public/images/1.png';
        $image = new Image(Image::IMAGE_GD,$path);
        $image->water($water)->save('./Public/images/logo_water.jpg');
    }
}