import { UseFetchProject } from "../component/fetchprojects";
export default function Images(){
  const { loading, project } = UseFetchProject();
  console.log("this is project",project);

      
        return;
            // {project.map(({ id, img, title, url }) => (
            //     <div className={style.productcards}><img className="" src={img} alt="" /></div>
            //   ))}
        
}

  