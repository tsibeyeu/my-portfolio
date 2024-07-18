import { createClient } from "contentful";
import { useEffect, useState } from "react";
const client = createClient({
  space: "qidpdpjv7cwy",
  environment: "master",
  accessToken: "BjUA1dG5xdjoWVKho9tvTxG_Mok1nqwCO1o8r1ii57Y",
});

export function UseFetchProject() {
  const [loading, setLoading] = useState(true);
  const [project, setProject] = useState([]);
  const [error, setError] = useState("");

  useEffect(() => {
    const getData = async () => {
      try {
        const response = await client.getEntries({ content_type: "projects" });
        console.log(response)

        if (!response) throw new Error("Check your internet connection!");
        const projects = response.items.map((item) => {
          const { title, url, image } = item.fields;
          const img = image?.fields?.file?.url;
          const id = item.sys.id;
          return { id, title, url, img };
        });
        setProject(projects);
        setLoading(false);
      } catch (error) {
        console.error(error);
        if (error.name !== "AbortError") {
          setError(error.message);
        }
        setLoading(false);
      }
    };
    getData();
  }, []);
  return { loading, project,error };
}
